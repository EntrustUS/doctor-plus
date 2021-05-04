<?php

class Swift_Plugins_RedirectingPluginTest extends \PHPUnit\Framework\TestCase
{
    public function testRecipientCanBeSetAndFetched()
    {
        $plugin = new Swift_Plugins_RedirectingPlugin('fabien@example.com');
        $this->assertEquals('fabien@example.com', $plugin->getRecipient());
        $plugin->setRecipient('chris@example.com');
        $this->assertEquals('chris@example.com', $plugin->getRecipient());
    }

    public function testPluginChangesRecipients()
    {
        $message = (new Swift_Message())
            ->setSubject('...')
            ->setFrom(['alxxxxxx@doctor.com' => 'John Doe'])
            ->setTo($to = [
                'alxxxxxx@doctor.com' => 'xxxx (To)',
                'alxxxxxx@doctor.com' => 'xxxx (To)',
            ])
            ->setCc($cc = [
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
            ])
            ->setBcc($bcc = [
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
            ])
            ->setBody('...')
        ;

        $plugin = new Swift_Plugins_RedirectingPlugin('alxxxxxx@doctor.com');

        $evt = $this->createSendEvent($message);

        $plugin->beforeSendPerformed($evt);

        $this->assertEquals($message->getTo(), ['alxxxxxx@doctor.com' => '']);
        $this->assertEquals($message->getCc(), []);
        $this->assertEquals($message->getBcc(), []);

        $plugin->sendPerformed($evt);

        $this->assertEquals($message->getTo(), $to);
        $this->assertEquals($message->getCc(), $cc);
        $this->assertEquals($message->getBcc(), $bcc);
    }

    public function testPluginRespectsUnsetToList()
    {
        $message = (new Swift_Message())
            ->setSubject('...')
            ->setFrom(['alxxxxxx@doctor.com' => 'xxxx'])
            ->setCc($cc = [
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
            ])
            ->setBcc($bcc = [
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
            ])
            ->setBody('...')
        ;

        $plugin = new Swift_Plugins_RedirectingPlugin('alxxxxxx@doctor.com');

        $evt = $this->createSendEvent($message);

        $plugin->beforeSendPerformed($evt);

        $this->assertEquals($message->getTo(), ['alxxxxxx@doctor.com' => '']);
        $this->assertEquals($message->getCc(), []);
        $this->assertEquals($message->getBcc(), []);

        $plugin->sendPerformed($evt);

        $this->assertEquals($message->getTo(), []);
        $this->assertEquals($message->getCc(), $cc);
        $this->assertEquals($message->getBcc(), $bcc);
    }

    public function testPluginRespectsAWhitelistOfPatterns()
    {
        $message = (new Swift_Message())
            ->setSubject('...')
            ->setFrom(['alxxxxxx@doctor.com' => 'John Doe'])
            ->setTo($to = [
                'alxxxxxx@doctor.com' => 'xxxx (To)',
                'alxxxxxx@doctor.com' => 'xxxx (To)',
                'alxxxxxx@doctor.com' => 'xxxx (To)',
            ])
            ->setCc($cc = [
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
                'alxxxxxx@doctor.com' => 'xxxx (Cc)',
            ])
            ->setBcc($bcc = [
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
                'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
            ])
            ->setBody('...')
        ;

        $recipient = 'alxxxxxx@doctor.com';
        $patterns = ['/^.*@internal.[a-z]+$/', '/^john-.*$/'];

        $plugin = new Swift_Plugins_RedirectingPlugin($recipient, $patterns);

        $this->assertEquals($recipient, $plugin->getRecipient());
        $this->assertEquals($plugin->getWhitelist(), $patterns);

        $evt = $this->createSendEvent($message);

        $plugin->beforeSendPerformed($evt);

        $this->assertEquals($message->getTo(), ['alxxxxxx@doctor.com' => 'xxxx (To)', 'alxxxxxx@doctor.com' => null]);
        $this->assertEquals($message->getCc(), ['alxxxxxx@doctor.com' => 'xxxx (Cc)']);
        $this->assertEquals($message->getBcc(), ['alxxxxxx@doctor.com' => 'xxxx (Bcc)']);

        $plugin->sendPerformed($evt);

        $this->assertEquals($message->getTo(), $to);
        $this->assertEquals($message->getCc(), $cc);
        $this->assertEquals($message->getBcc(), $bcc);
    }

    public function testArrayOfRecipientsCanBeExplicitlyDefined()
    {
        $message = (new Swift_Message())
            ->setSubject('...')
            ->setFrom(['alxxxxxx@doctor.com' => 'John Doe'])
            ->setTo([
            'alxxxxxx@doctor.com' => 'xxxx',
            'alxxxxxx@doctor.com' => 'xxxx (To)',
            'alxxxxxx@doctor.com' => 'xxxx (To)',
        ])
            ->setCc([
            'alxxxxxx@doctor.com' => 'xxxx',
            'alxxxxxx@doctor.com' => 'xxxx (Cc)',
            'alxxxxxx@doctor.com' => 'xxxx (Cc)',
        ])
            ->setBcc([
            'alxxxxxx@doctor.com' => 'xxxx',
            'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
            'alxxxxxx@doctor.com' => 'xxxx (Bcc)',
        ])
            ->setBody('...')
        ;

        $recipients = ['alxxxxxx@doctor.com', 'alxxxxxx@doctor.com'];
        $patterns = ['/^.*@internal.[a-z]+$/'];

        $plugin = new Swift_Plugins_RedirectingPlugin($recipients, $patterns);

        $evt = $this->createSendEvent($message);

        $plugin->beforeSendPerformed($evt);

        $this->assertEquals(
            $message->getTo(),
            ['alxxxxxx@doctor.com' => 'xxxx', 'alxxxxxx@doctor.com' => 'xxxx (To)', 'alxxxxxx@doctor.com' => null]
        );
        $this->assertEquals(
            $message->getCc(),
            ['alxxxxxx@doctor.com' => 'xxxx', 'alxxxxxx@doctor.com' => 'xxxx (Cc)']
        );
        $this->assertEquals($message->getBcc(), ['alxxxxxx@doctor.com' => 'xxxx']);
    }

    private function createSendEvent(Swift_Mime_SimpleMessage $message)
    {
        $evt = $this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        $evt->expects($this->any())
            ->method('getMessage')
            ->will($this->returnValue($message));

        return $evt;
    }
}

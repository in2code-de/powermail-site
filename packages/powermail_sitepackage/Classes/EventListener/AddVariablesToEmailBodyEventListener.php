<?php

declare(strict_types=1);

namespace In2code\PowermailSitepackage\EventListener;

use In2code\Powermail\Events\SendMailServiceCreateEmailBodyEvent;
use TYPO3\CMS\Core\Attribute\AsEventListener;

#[AsEventListener(
    identifier: 'powermail-sitepackage/add-variables-to-email-body'
)]
final class AddVariablesToEmailBodyEventListener
{
    public function __invoke(SendMailServiceCreateEmailBodyEvent $event): void
    {
        $sendMailService = $event->getSendMailService();
        $view = $event->getStandaloneView();

        $view->assign('emailType', $sendMailService->getType());
        $view->assign('customFooter', $this->resolveCustomFooter($sendMailService->getType()));
    }

    private function resolveCustomFooter(string $type): string
    {
        return match ($type) {
            'receiver' => 'Diese E-Mail wurde automatisch durch das Kontaktformular generiert.',
            'sender' => 'Vielen Dank für Ihre Anfrage. Wir melden uns in Kürze.',
            default => '',
        };
    }
}

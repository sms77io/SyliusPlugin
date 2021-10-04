<?php declare(strict_types=1);

namespace Sms77\SyliusPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Translation\DataCollectorTranslator;

class AdminMenuListener {
    /** @var UrlGeneratorInterface $router */
    private $router;
    /** @var DataCollectorTranslator $translator */
    private $translator;

    public function __construct(UrlGeneratorInterface $router, DataCollectorTranslator $translator) {
        $this->router = $router;
        $this->translator = $translator;
    }

    public function addAdminMenuItems(MenuBuilderEvent $event): void {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('sms77')
            ->setLabel('sms77');

        $newSubmenu
            ->addChild('sms77-config')
            ->setLabel($this->translator->trans('sms77.ui.configs'))
            ->setUri($this->router->generate('sms77_admin_config_index'));

        $newSubmenu
            ->addChild('sms77-write')
            ->setLabel($this->translator->trans('sms77.ui.sms'))
            ->setUri($this->router->generate('sms77_admin_sms_index'));

        $newSubmenu
            ->addChild('sms77-write-voice')
            ->setLabel($this->translator->trans('sms77.ui.text_to_speech'))
            ->setUri($this->router->generate('sms77_admin_voice_index'));
    }
}

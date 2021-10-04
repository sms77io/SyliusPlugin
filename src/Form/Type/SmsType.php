<?php declare(strict_types=1);

namespace Sms77\SyliusPlugin\Form\Type;

use Sms77\SyliusPlugin\Entity\AbstractMessage;
use Sms77\SyliusPlugin\Entity\Message;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Component\Customer\Model\CustomerGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SmsType extends AbstractMessageType {
    /** {@inheritdoc} */
    public function getBlockPrefix(): ?string {
        return 'sms77_message';
    }
}

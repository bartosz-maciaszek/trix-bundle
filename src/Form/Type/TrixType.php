<?php
namespace BM\TrixBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class TrixType extends AbstractType
{
    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * @param bool $flag
     */
    public function setEnabled(bool $flag)
    {
        $this->enabled = $flag;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return TextareaType::class;
    }
}

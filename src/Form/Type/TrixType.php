<?php
namespace BM\TrixBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class TrixType extends AbstractType
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * TrixType constructor.
     */
    public function __construct()
    {
        $this->id = substr(md5(uniqid(time(), true)), -6);
    }

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
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['trixId'] = $this->id;
        $view->vars['enabled'] = $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return TextareaType::class;
    }
}

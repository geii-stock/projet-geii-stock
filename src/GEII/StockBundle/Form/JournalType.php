<?php

namespace GEII\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JournalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prixht')
            ->add('prixttc')
            ->add('quantite')
            ->add('dateha')
            ->add('dateCreation')
            ->add('createurMouvement')
            ->add('idArticle')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEII\StockBundle\Entity\Journal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'geii_stockbundle_journal';
    }
}

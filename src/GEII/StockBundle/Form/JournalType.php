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
            ->add('idArticle','entity',array(
                'label' => 'Référence :',
                'class' => 'GEII\StockBundle\Entity\Article',
                'property' => 'reference')
                )
            ->add('prixht','text',array(
                'label' => 'Prix d\'achat (HT) :',
                'attr' => array('placeholder' => 'Exemple: 235.95','size' => 25)
                ))
            ->add('prixttc','text',array(
                'label' => 'Prix d\'achat (TTC) :',
                'attr' => array('placeholder' => 'Exemple: 5.5','size' => 25)
                ))
            ->add('quantite','text',array(
                'label' => 'Quantité :',
                'attr' => array('placeholder' => 'Exemple: 123','size' => 25)
                ))
            ->add('dateha','text',array(
                'label' => 'Date d\'achat (+) :'
                ))
            ->add('dateCreation')
            ->add('createurMouvement')
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

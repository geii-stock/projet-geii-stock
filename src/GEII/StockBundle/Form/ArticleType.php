<?php

namespace GEII\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('idCategorie','entity',array(
                'class' => 'GEII\StockBundle\Entity\Categorie',
                'property' => 'nom')
            )
            ->add('idSousCategorie','entity',array(
                'class' => 'GEII\StockBundle\Entity\SousCategorie',
                'property' => 'nom')
                )
            ->add('designation')
            ->add('idDestination')
            ->add('idSousDestination')
            ->add('udv')
            ->add('seuilbas')
            ->add('dateCreation')
            ->add('createurArticle')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEII\StockBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'geii_stockbundle_article';
    }
}

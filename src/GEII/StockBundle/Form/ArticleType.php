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
            ->add('reference','text',array(
                'label' => 'Référence',
                'required' => true
                ))
            ->add('idCategorie','entity',array(
                'label' => 'Catégorie',
                'class' => 'GEII\StockBundle\Entity\Categorie',
                'property' => 'nom',
                'required' => true
                )
            )
            ->add('idSousCategorie','entity',array(
                'label' => 'Sous-catégorie',
                'class' => 'GEII\StockBundle\Entity\SousCategorie',
                'property' => 'nom',
                'required' => true)
                )
            ->add('designation','text',array(
                'label' => 'Désignation',
                'required' => true
                ))
            ->add('idDestination','entity',array(
                'label' => 'Déstination',
                'class' => 'GEII\StockBundle\Entity\Destination',
                'property' => 'nom')
                )
            ->add('idSousDestination','entity',array(
                'label' => 'sous-déstination',
                'class' => 'GEII\StockBundle\Entity\SousDestination',
                'property' => 'nom')
                )
            ->add('udv','text',array(
                'label' => 'UDV'
                ))
            ->add('seuilbas','text',array(
                'label' => 'Seuil bas'
                ))
            ->add('dateCreation','datetime',array(
                'attr' => array('class' => 'hide'),
                'label' => false
                ))
            ->add('createurArticle','text',array(
                'label' => 'Auteur',
                ))
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

<?php

namespace ProduitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie',EntityType::class, array(
                'class' => 'ProduitBundle:Categorie',
                'choice_label' => 'nomCategorie',
                'multiple' => 'false'))
            ->add('marque',EntityType::class, array(
                'class' => 'ProduitBundle:Marque',
                'choice_label' => 'nomMarque',
                'multiple' => 'false'))
            ->add('nomArticle')
            ->add('file',FileType::class)
            ->add('prixArticle' )
            ->add('quantiteArticle')
            ->add('descriptionArticle');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProduitBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'produitbundle_article';
    }


}

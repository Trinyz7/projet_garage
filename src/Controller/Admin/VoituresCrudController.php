<?php

namespace App\Controller\Admin;

use App\Entity\Voitures;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class VoituresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Voitures::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(), // Cache le champ ID dans le formulaire
            TextField::new('marque', 'Marque'),
            TextField::new('modele', 'Modèle'),
            MoneyField::new('prix', 'Prix')->setCurrency('EUR'),
            IntegerField::new('annee', 'Année de mise en circulation'),
            IntegerField::new('kilometrage', 'Kilométrage'),
            ImageField::new('image', 'Image de la voiture')
                ->setBasePath('/uploads/images')
                ->setUploadDir('public/uploads/images')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }
}

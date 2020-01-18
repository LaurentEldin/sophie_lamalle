<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @Vich\Uploadable()
 */

// C'est le mirroir de ma table Article dans ma base de données (BDD)
// Je la crée via le terminal (php/bin console make:entity) grâce à l'ORM doctrine.
// Ensuite je remplis les champs que je souhaite (ex: nom, text, image..)
// Une fois les champs remplis pour valider mon entité en BDD
// Dans mon terminal je réalise une migration ! Ce qui confirme la création de la table et des attributs dans ma BBD
// Par sécurité je vais vérifier dans mon PhpMyAdmin.
class Article
{
    // ici c'est mon champs ID qui s'auto-implémente et auto-incrémente.
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    // Pour certain champs j'ai utilisé des Assert afin de sécurisé les données saisie par l'utilisateur.
    // Ici je lui dis que pour l'attribut $text, il devra au minimum y avoir 2 caractères dans l'input de saisie.
    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(min="2")
     */
    private $text;

    // $filemane contient le nom de l'image qui vient d'être télécharger et l'envoie en BDD
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $filename;

    // Ici c'est pour contenir les données binaire du fichier. Il n'y à pas d'ORM car cela n'ira pas en BDD.
    // Le "mapping" permet au bundle de savoir où les fichiers doivent être téléchargés
    // et quels chemins doivent être utilisés pour les afficher.
    // Il est également configurer dans le fichier vich_uploader.yaml
    /**
     * @var File
     * @Vich\UploadableField(mapping="article_image", fileNameProperty="filename")
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    // C'est un champs qui correspont au champs d'une autre table.
    // il à une relation ManyToOne. C'est à dire que plusieurs articles peuvent appartenir à UNE catégorie.
    // Grâce à targetEntity, on lui donne le chemin de l'entité voulu.
    // InversedBy doit être spécifié du côté de l'entité qui reçoit une association bidirectionnelle.
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="articles")
     */
    private $categorie;

    // C'est la partie avec les getters and setters.
    // Cela permet de se servir de ces méthodes dans les controlleurs pour obtenir des données,
    // Et pourvoir afficher ces données.
    // Par exemple : getId permet d'obtenir l'id d'un objet. ( article.id = 4 ).
    // Le getter permet de récupérer les données pour afficher.

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    // Le setteur lui permet de modifier les données.
    // Ici par exemple : grâce à la méthode "setText"
    // On peut créer/modifier les données qui se trouve dedans.

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getImg(): ?File
    {
        return $this->img;
    }
    public function setImg($img): self
    {
        $this->img = $img;
        // C'est obligatoire de modifier un champs si on utilise Doctrine.
        // Sinon les "event listeners" ne seront pas appelé et le fichier sera perdu.
        // Du coup j'ai choisi de modifier le champs "DateTime" et de le modifier par l'heure actuelle au moment de la modification.
        if ($this->img instanceof UploadedFile) {
            $this->updated_at = new \DateTime('now');
        }
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    // ici le "mixed" indique qu'un paramètre peut accepter plusieurs types.
    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename): void
    {
        $this->filename = $filename;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

}

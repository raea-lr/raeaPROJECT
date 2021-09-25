<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $labelProject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $budgetProject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $deadlineProject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $responsibleProject;

    /**
     * @ORM\Column(type="date")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at" , type="date", nullable=true)
     */
    private $updated;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelProject(): ?string
    {
        return $this->labelProject;
    }

    public function setLabelProject(string $labelProject): self
    {
        $this->labelProject = $labelProject;

        return $this;
    }

    public function getBudgetProject(): ?string
    {
        return $this->budgetProject;
    }

    public function setBudgetProject(string $budgetProject): self
    {
        $this->budgetProject = $budgetProject;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDeadlineProject(): ?\DateTimeInterface
    {
        return $this->deadlineProject;
    }

    public function setDeadlineProject(\DateTimeInterface $deadlineProject): self
    {
        $this->deadlineProject = $deadlineProject;

        return $this;
    }

    public function getResponsibleProject(): ?string
    {
        return $this->responsibleProject;
    }

    public function setResponsibleProject(string $responsibleProject): self
    {
        $this->responsibleProject = $responsibleProject;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function __toString(){
        return $this->labelProject;
    }
}

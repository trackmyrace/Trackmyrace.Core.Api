<?php
namespace Trackmyrace\Core\Tests\Functional\Api\Fixtures\Domain\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Entity
 *
 * @package Trackmyrace\Core\Tests\Api\Fixtures\Domain\Model
 * @Flow\Entity
 */
class Entity
{

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var Collection<Entity>
	 * @ORM\ManyToMany
	 * @ORM\JoinTable(inverseJoinColumns={@ORM\JoinColumn(unique=true)})
	 */
	protected $entities;

	public function __construct()
	{
		$this->entities = new ArrayCollection();
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return Collection<Entity>
	 */
	public function getEntities()
	{
		return $this->entities;
	}

	/**
	 * @param Collection<Entity> $entities
	 */
	public function setEntities($entities)
	{
		$this->entities = $entities;
	}

	/**
	 * @param Entity $entity
	 */
	public function addEntity($entity)
	{
		$this->entities->add($entity);
	}
}

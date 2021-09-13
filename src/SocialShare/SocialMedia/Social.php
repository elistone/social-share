<?php
/**
 * The social abstract class.
 */

namespace SocialShare\SocialMedia;

use SocialShare\Preview;

abstract class Social {

  /**
   * Template type.
   *
   * @var string
   */
  protected string $type = "";

  /**
   * Title.
   *
   * @var string
   */
  protected string $title;

  /**
   * Description.
   *
   * @var string
   */
  protected string $description;

  /**
   * Image URL.
   *
   * @var string
   */
  protected string $imageUrl;

  /**
   * Link url.
   *
   * @var string
   */
  protected string $url;

  /**
   * Holds the template.
   *
   * @var string
   */
  protected string $template;

  public function __construct(Preview $preview) {
    $this->title = $preview->getTitle();
    $this->description = $preview->getDescription();
    $this->imageUrl = $preview->getImageUrl();
    $this->url = $preview->getUrl();
  }

  /**
   * Returns the machine name of the type.
   *
   * @return string
   */
  protected function typeMachineName(): string {
    return preg_replace('/\W+/', '', strtolower(strip_tags($this->type)));
  }

  /**
   * A template for the output.
   *
   * @return string
   */
  abstract public function template(): string;

}
<?php

namespace SocialShare;

use SocialShare\SocialMedia\Facebook;
use SocialShare\SocialMedia\LinkedIn;
use SocialShare\SocialMedia\Twitter;
use SocialShare\SocialMedia\Unknown;

class Preview {

  /**
   * Type of preview to create.
   *
   * @var string
   */
  private string $type = "";

  /**
   * Preview title.
   *
   * @var string
   */
  protected string $title = "";

  /**
   * Preview description.
   *
   * @var string
   */
  protected string $description = "";

  /**
   * Preview image url.
   *
   * @var string
   */
  protected string $imageUrl = "";

  /**
   * Site url.
   *
   * @var string
   */
  protected string $url = "";

  /**
   * Set the title.
   *
   * @param $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Return the title.
   *
   * @return string
   */
  public function getTitle(): string {
    return $this->title;
  }

  /**
   * Set the description.
   *
   * @param $description
   */
  public function setDescription($description) {
    $this->description = $description;
  }

  /**
   * Return the description.
   *
   * @return string
   */
  public function getDescription(): string {
    return $this->description;
  }

  /**
   * Set the imageUrl.
   *
   * @param $imageUrl
   */
  public function setImageUrl($imageUrl) {
    $this->imageUrl = $imageUrl;
  }

  /**
   * Returns the imageUrl.
   *
   * @return string
   */
  public function getImageUrl(): string {
    return $this->imageUrl;
  }

  /**
   * Set the site url.
   *
   * @param $url
   */
  public function setUrl($url) {
    $this->url = $url;
  }

  /**
   * Return the site url.
   *
   * @return string
   */
  public function getUrl(): string {
    return $this->url;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function generate(): string {
    switch (strtolower($this->type)) {
      case "facebook":
        $output = new Facebook($this);
        break;
      case "linkedin":
        $output = new LinkedIn($this);
        break;
      case "twitter":
        $output = new Twitter($this);
        break;
      default:
        $output = new Unknown($this);
    }

    return $output->template();
  }

}
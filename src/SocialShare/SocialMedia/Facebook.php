<?php
/**
 * Facebook Social class.
 */

namespace SocialShare\SocialMedia;

class Facebook extends Social {

  protected string $type = "Facebook";

  public function template(): string {
    $this->template = "<div class='social-share social-share-{$this->typeMachineName()}'>";

    $this->template .= "<div class='social-share-image-wrapper' style='background-image: url({$this->imageUrl});'></div>";

    $this->template .= "<div class='social-share-footer'>";
    $this->template .= "<div class='social-share-url'>{$this->url}</div>";
    $this->template .= "<div class='social-share-title'>{$this->title}</div>";
    $this->template .= "</div>";

    $this->template .= "</div>";
    return $this->template;
  }

}
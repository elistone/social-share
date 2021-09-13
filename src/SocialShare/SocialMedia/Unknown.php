<?php
/**
 * Unknown Social class.
 */

namespace SocialShare\SocialMedia;

class Unknown extends Social {

  protected string $type = "Unknown";

  public function template(): string {
    $this->template = "<div class='social-share social-share-{$this->typeMachineName()}'>";

    $this->template .= "<div class='social-share-footer'>";
    $this->template .= "<div class='social-share-unknown'>Unknown template selected.</div>";
    $this->template .= "</div>";

    $this->template .= "</div>";
    return $this->template;
  }

}
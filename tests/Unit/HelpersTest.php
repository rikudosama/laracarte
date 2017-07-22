<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpersTest extends TestCase
{
  /** @test */
  public function page_title_should_return_the_base_title_if_title_is_epmty()
  {
    $this->assertEquals('Laracarte - List of artisans', page_title(''));
  }
  /** @test */
  public function page_title_should_return_the_base_title_if_title_is_provided()
  {
    $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    $this->assertEquals('Home | Laracarte - List of artisans', page_title('Home'));
  }
/**  @test */
  public function set_active_route_should_return_the_corect_class_name_based_on_a_given_route()
  {
      $this->get(route('root_path'));
      $this->assertEquals('active', set_active_route('root_path'));
      $this->assertEquals('', set_active_route('about_path'));
  }
}

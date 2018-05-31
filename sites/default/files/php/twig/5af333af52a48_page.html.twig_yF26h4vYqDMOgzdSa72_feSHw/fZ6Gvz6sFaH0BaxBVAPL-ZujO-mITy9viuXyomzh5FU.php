<?php

/* themes/qatar_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_1326efcddfdfe454dcd9da2df6b372408e96f00e4e330e3d68cf183b1422b589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 75, "for" => 150);
        $filters = array("raw" => 151, "date" => 462);
        $functions = array("drupal_entity" => 450);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array('drupal_entity')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

<header class=\"main-header\">
  <nav class=\"topnav navbar-default navbar navbar-expand-lg header-navbar navbar-light\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-8\">
          
          <button class=\"navbar-toggler\" type=\"button\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 76
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 78
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 83
            echo "          <div class=\"col-md-4\">
            ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 87
        echo "      
        ";
        // line 88
        if ($this->getAttribute(($context["page"] ?? null), "contact_email", array())) {
            // line 89
            echo "          <div class=\"col-md-4\">
            ";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_email", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 93
        echo "
        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 103
            echo "  <div class=\"main-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "

          <!-- Start: Social media icons -->

          ";
            // line 111
            if (($context["show_social_icon"] ?? null)) {
                // line 112
                echo "            <div class=\"social-media\">
              ";
                // line 113
                if (($context["facebook_url"] ?? null)) {
                    // line 114
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
                }
                // line 116
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 117
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
                }
                // line 119
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 120
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
                }
                // line 122
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 123
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
                }
                // line 125
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 126
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
                }
                // line 128
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 129
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 131
                echo "            </div>
          ";
            }
            // line 133
            echo "
          <!-- End: Social media icons -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 141
        echo "
<!-- End: Main menu -->


<!-- Start: Slider -->

  ";
        // line 147
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 148
            echo "    <div class=\"flexslider wow- bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 151
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "      </ul>
    </div>
  ";
        }
        // line 156
        echo "
<!-- End: Slider -->


<!-- Start: Home page message -->

";
        // line 162
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()))) {
            // line 163
            echo "<div class=\"home-message\">
  <div class=\"container\">
    <div class=\"wow- bounceInDown\">    
        ";
            // line 166
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()), "html", null, true));
            echo "
    </div>
  </div>
</div>
";
        }
        // line 171
        echo "
<!--End: Home page message -->


<!-- Start: Main content -->
<div class=\"main-content\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 182
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 190
        echo "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 195
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 196
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 201
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 208
        echo "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 216
        if ( !($context["is_front"] ?? null)) {
            // line 217
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 218
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
          </div>
        ";
        }
        // line 221
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--- Start: Left SideBar -->
          ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 228
            echo "            <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo ">
              <div class=\"sidebar\">
                ";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </div>
            </div>
          ";
        }
        // line 234
        echo "          <!-- End Left SideBar -->

          <!--- Start Content -->
          ";
        // line 237
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 238
            echo "            <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
              <div class=\"content_layout\">
                ";
            // line 240
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              </div>              
            </div>
          ";
        }
        // line 244
        echo "          <!-- End: Content -->

          <!-- Start: Right SideBar -->
          ";
        // line 247
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 248
            echo "            <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
              <div class=\"sidebar\">
                ";
            // line 250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </div>
            </div>
          ";
        }
        // line 254
        echo "          <!-- End: Right SideBar -->
          
        </div>
      
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Top widget -->

";
        // line 268
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
            // line 269
            echo "  <div class=\"container-\">
    <div class=\"parallax-region wow- bounceInDown\">

      ";
            // line 272
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
                // line 273
                echo "        <div class=\"row clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 276
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 277
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 278
                echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 282
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 283
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 284
                echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 288
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 289
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 290
                echo "          
          <!-- End: Top widget third -->

          <!-- Start: Top widget forth -->         
          ";
                // line 294
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_forth", array())) {
                    // line 295
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_forth", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 296
                echo "          
          <!-- End: Top widget forth -->

        </div>
      ";
            }
            // line 301
            echo "
    </div>
  </div>
";
        }
        // line 305
        echo "
<!--End: Top widget -->



<!-- Start: Services -->

";
        // line 312
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", array()))) {
            // line 313
            echo "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 319
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "services", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 326
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 332
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", array())))) {
            // line 333
            echo "  <div class=\"bottom-widget\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 339
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 340
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 341
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 343
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 347
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 348
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 349
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 351
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 355
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 356
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 357
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 359
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 363
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 364
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 365
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 368
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 375
        echo "
<!--End: Bottom widgets -->


";
        // line 379
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", array()))) {
            // line 380
            echo "  <div class=\"container clients-wrap\">
    <div class=\"parallax-region wow- bounceInDown\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 384
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "clients", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 390
        echo "

<!-- Start: Footer widgets -->

";
        // line 394
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 395
            echo "  <div class=\"footerwidget\" id=\"\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 401
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 402
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 403
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 406
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 409
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 410
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 411
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 414
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 417
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 418
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 419
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 422
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>


  </div>
";
        }
        // line 431
        echo "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 437
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 438
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 439
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "</div>
  </div>
";
        }
        // line 442
        echo "
<!--End: Map -->

<div class=\"before-footer\">
    ";
        // line 446
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["before_footer"] ?? null), "html", null, true));
        echo "
</div>

<div class=\"newsletter-block\">
  ";
        // line 450
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("webform", "newletter"), "html", null, true));
        echo "
</div>

<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">

    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-8\">
        <div class=\"user-menu\">
          <p>Copyright © ";
        // line 462
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
          ";
        // line 463
        if ($this->getAttribute(($context["page"] ?? null), "user_menu", array())) {
            // line 464
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "user_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 466
        echo "        </div>        
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 471
        if (($context["show_credit_link"] ?? null)) {
            // line 472
            echo "        <div class=\"col-sm-4\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 476
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/qatar_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 476,  783 => 472,  781 => 471,  774 => 466,  768 => 464,  766 => 463,  762 => 462,  747 => 450,  740 => 446,  734 => 442,  728 => 439,  725 => 438,  723 => 437,  715 => 431,  704 => 422,  698 => 419,  693 => 418,  691 => 417,  686 => 414,  680 => 411,  675 => 410,  673 => 409,  668 => 406,  662 => 403,  657 => 402,  655 => 401,  647 => 395,  645 => 394,  639 => 390,  630 => 384,  624 => 380,  622 => 379,  616 => 375,  607 => 368,  601 => 365,  596 => 364,  594 => 363,  588 => 359,  582 => 357,  577 => 356,  575 => 355,  569 => 351,  563 => 349,  558 => 348,  556 => 347,  550 => 343,  544 => 341,  539 => 340,  537 => 339,  529 => 333,  527 => 332,  519 => 326,  509 => 319,  501 => 313,  499 => 312,  490 => 305,  484 => 301,  477 => 296,  469 => 295,  467 => 294,  461 => 290,  453 => 289,  451 => 288,  445 => 284,  437 => 283,  435 => 282,  429 => 278,  421 => 277,  419 => 276,  414 => 273,  412 => 272,  407 => 269,  405 => 268,  389 => 254,  382 => 250,  376 => 248,  374 => 247,  369 => 244,  362 => 240,  356 => 238,  354 => 237,  349 => 234,  342 => 230,  336 => 228,  334 => 227,  326 => 221,  320 => 218,  317 => 217,  315 => 216,  305 => 208,  295 => 201,  288 => 196,  286 => 195,  279 => 190,  271 => 185,  266 => 182,  264 => 181,  252 => 171,  244 => 166,  239 => 163,  237 => 162,  229 => 156,  224 => 153,  215 => 151,  211 => 150,  207 => 148,  205 => 147,  197 => 141,  187 => 133,  183 => 131,  177 => 129,  174 => 128,  168 => 126,  165 => 125,  159 => 123,  156 => 122,  150 => 120,  147 => 119,  141 => 117,  138 => 116,  132 => 114,  130 => 113,  127 => 112,  125 => 111,  118 => 107,  112 => 103,  110 => 102,  99 => 93,  93 => 90,  90 => 89,  88 => 88,  85 => 87,  79 => 84,  76 => 83,  74 => 82,  68 => 78,  62 => 76,  60 => 75,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/qatar_zymphonies_theme/templates/layout/page.html.twig", "/Applications/MAMP/htdocs/prits/themes/qatar_zymphonies_theme/templates/layout/page.html.twig");
    }
}

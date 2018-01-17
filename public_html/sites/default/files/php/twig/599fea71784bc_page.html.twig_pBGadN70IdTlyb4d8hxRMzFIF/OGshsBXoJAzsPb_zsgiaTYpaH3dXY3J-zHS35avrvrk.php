<?php

/* themes/vanessa/templates/page.html.twig */
class __TwigTemplate_a9ab64cb529f37412c33ec6621745dd583428e35af29b3bebc9d7a0cd1ef25a9 extends Twig_Template
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
        $tags = array("if" => 60);
        $filters = array();
        $functions = array("path" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('path')
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

        // line 59
        echo "<div id=\"top\" class=\"layout\">
  <header id=\"menu\" class=\"navbar";
        // line 60
        if ( !($context["is_front"] ?? null)) {
            echo " force-affix";
        }
        echo "\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a href=\"";
        // line 69
        if (($context["is_front"] ?? null)) {
            echo "#top";
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        }
        echo "\" class=\"brand js-target-scroll\">
          <img class=\"brand-img-white\" alt=\"\" width=\"180\" src=\"";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/images/brand-white.png\">
          <img class=\"brand-img\" alt=\"\" width=\"130\" src=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/images/brand-white.png\">
        </a>
      </div>
      ";
        // line 74
        if (($context["is_front"] ?? null)) {
            // line 75
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\"> 
          ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 79
        echo "    </div>
  </header>

    <div id=\"home\">
  ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
        echo "
    </div>


  <div class=\"content";
        // line 87
        if ( !($context["is_front"] ?? null)) {
            echo " force-content";
        }
        echo "\">
    ";
        // line 88
        if (($this->getAttribute(($context["page"] ?? null), "content", array()) &&  !($context["is_front"] ?? null))) {
            // line 89
            echo "      <div class=\"main-content\">
        <div class=\"container\">
          ";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "sponsors", array())) {
            // line 97
            echo "      <section id=\"";
            if (($context["anchor_sponsors"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_sponsors"] ?? null), "html", null, true));
            } else {
                echo "sponsors";
            }
            echo "\" class=\"partners bgc-light\">
        ";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sponsors", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "quick_facts", array())) {
            // line 103
            echo "      <section id=\"";
            if (($context["anchor_quick_facts"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_quick_facts"] ?? null), "html", null, true));
            } else {
                echo "quick-facts";
            }
            echo "\" class=\"about text-center section\">
        ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "quick_facts", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 107
        echo "
    ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "fullwidth_image", array())) {
            // line 109
            echo "      <section id=\"";
            if (($context["anchor_fullwidth_image"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_fullwidth_image"] ?? null), "html", null, true));
            } else {
                echo "fullwidth-image";
            }
            echo "\" class=\"product bgc-light text-center section-sm\">
        ";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fullwidth_image", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "percentage_rings", array())) {
            // line 115
            echo "      <section id=\"";
            if (($context["anchor_percentage_rings"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_percentage_rings"] ?? null), "html", null, true));
            } else {
                echo "percentage-rings";
            }
            echo "\" class=\"charts section\">
        ";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "percentage_rings", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "video_popup", array())) {
            // line 121
            echo "      <section id=\"";
            if (($context["anchor_video_popup"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_video_popup"] ?? null), "html", null, true));
            } else {
                echo "video-popup";
            }
            echo "\" class=\"video-section text-white masked section-lg\">
        ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "video_popup", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 125
        echo "
    ";
        // line 126
        if ($this->getAttribute(($context["page"] ?? null), "image_left", array())) {
            // line 127
            echo "      <section id=\"image-left\" style=\"height:450px\">
        ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "image_left", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        if ($this->getAttribute(($context["page"] ?? null), "image_right", array())) {
            // line 133
            echo "      <section id=\"";
            if (($context["anchor_image_right"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_image_right"] ?? null), "html", null, true));
            } else {
                echo "image-right";
            }
            echo "\" class=\"features section\">
        ";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "image_right", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 137
        echo "
    ";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "call_to_action", array())) {
            // line 139
            echo "      <section id=\"";
            if (($context["anchor_call_to_action"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_call_to_action"] ?? null), "html", null, true));
            } else {
                echo "call-to-action";
            }
            echo "\" class=\"text-white bgc-primary section-sm\">
        ";
            // line 140
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "call_to_action", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ($this->getAttribute(($context["page"] ?? null), "testimonials", array())) {
            // line 145
            echo "      <section id=\"";
            if (($context["anchor_testimonials"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_testimonials"] ?? null), "html", null, true));
            } else {
                echo "testimonials";
            }
            echo "\" class=\"reviews text-center section\">
        ";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "testimonials", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 149
        echo "

    ";
        // line 151
        if ($this->getAttribute(($context["page"] ?? null), "pricing_tables", array())) {
            // line 152
            echo "      <section id=\"";
            if (($context["anchor_pricing_tables"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_pricing_tables"] ?? null), "html", null, true));
            } else {
                echo "pricing-tables";
            }
            echo "\" class=\"prices text-center masked section\" data-stellar-background-ratio=\"0.7\">
        ";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pricing_tables", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 156
        echo "
    ";
        // line 157
        if ($this->getAttribute(($context["page"] ?? null), "newsletter", array())) {
            // line 158
            echo "      <section id=\"";
            if (($context["anchor_newsletter"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_newsletter"] ?? null), "html", null, true));
            } else {
                echo "newsletter";
            }
            echo "\" class=\"text-center bgc-light section-sm\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
              ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "newsletter", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </section>
    ";
        }
        // line 168
        echo "
<!--
    ";
        // line 170
        if (($context["is_front"] ?? null)) {
            // line 171
            echo "      <section id=\"";
            if (($context["anchor_contact_details"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_contact_details"] ?? null), "html", null, true));
            } else {
                echo "contact";
            }
            echo "\" class=\"contacts text-center section\">
        ";
            // line 172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_details", array()), "html", null, true));
            echo "
        ";
            // line 173
            if (($context["map_show"] ?? null)) {
                // line 174
                echo "          <div class=\"section-body map-layer\">
            <div id=\"map\" class=\"map\"></div>
          </div>
        ";
            }
            // line 178
            echo "      </section>
    ";
        }
        // line 180
        echo "-->
  </div><!-- /.content -->

  <footer id=\"footer\" class=\"footer text-center\">
    <div class=\"container\">
      <div class=\"social\">
        ";
        // line 186
        if (($context["footer_facebook"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_facebook"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-facebook\"></a>";
        }
        // line 187
        echo "        ";
        if (($context["footer_twitter"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_twitter"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-twitter\"></a>";
        }
        // line 188
        echo "        ";
        if (($context["footer_pinterest"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_pinterest"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-pinterest\"></a>";
        }
        // line 189
        echo "        ";
        if (($context["footer_youtube"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_youtube"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-youtube-play\"></a>";
        }
        // line 190
        echo "        ";
        if (($context["footer_linkedin"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_linkedin"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-linkedin\"></a>";
        }
        // line 191
        echo "      </div>     
    </div>
    ";
        // line 193
        if (($context["footer_copyright"] ?? null)) {
            // line 194
            echo "      <div class=\"copy\">
        ";
            // line 195
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_copyright"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 198
        echo "  </footer>
</div><!-- /#layout -->

";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "modal", array())) {
            // line 202
            echo "  <div id=\"request\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <span class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</span>
\t</div>
        <div class=\"modal-body text-center\">
    ";
            // line 209
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "modal", array()), "html", null, true));
            echo "
</div>
</div></div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/vanessa/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 209,  437 => 202,  435 => 201,  430 => 198,  424 => 195,  421 => 194,  419 => 193,  415 => 191,  408 => 190,  401 => 189,  394 => 188,  387 => 187,  381 => 186,  373 => 180,  369 => 178,  363 => 174,  361 => 173,  357 => 172,  348 => 171,  346 => 170,  342 => 168,  333 => 162,  321 => 158,  319 => 157,  316 => 156,  310 => 153,  301 => 152,  299 => 151,  295 => 149,  289 => 146,  280 => 145,  278 => 144,  275 => 143,  269 => 140,  260 => 139,  258 => 138,  255 => 137,  249 => 134,  240 => 133,  238 => 132,  235 => 131,  229 => 128,  226 => 127,  224 => 126,  221 => 125,  215 => 122,  206 => 121,  204 => 120,  201 => 119,  195 => 116,  186 => 115,  184 => 114,  181 => 113,  175 => 110,  166 => 109,  164 => 108,  161 => 107,  155 => 104,  146 => 103,  144 => 102,  141 => 101,  135 => 98,  126 => 97,  124 => 96,  121 => 95,  114 => 91,  110 => 89,  108 => 88,  102 => 87,  95 => 83,  89 => 79,  83 => 76,  80 => 75,  78 => 74,  72 => 71,  68 => 70,  60 => 69,  46 => 60,  43 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/vanessa/templates/page.html.twig", "/var/www/test.2movepeople.dk/public_html/themes/vanessa/templates/page.html.twig");
    }
}

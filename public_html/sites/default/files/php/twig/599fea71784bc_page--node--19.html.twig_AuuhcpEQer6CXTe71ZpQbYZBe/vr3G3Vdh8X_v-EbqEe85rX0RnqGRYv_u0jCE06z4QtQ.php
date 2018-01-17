<?php

/* themes/vanessa/templates/page--node--19.html.twig */
class __TwigTemplate_bb0c0bdfa393122680bccb5c30deff378c6efacba355d8289917b4dc10f5eafa extends Twig_Template
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
        $tags = array("if" => 69);
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
        echo "<div id=\"top\" class=\"layout page--about\">
  <header id=\"menu\" class=\"navbar force-affix\">
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
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\"> 
          ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
  
    </div>
  </header>

  ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 82
            echo "    <div id=\"price-page\">
      ";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 86
        echo "
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
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "video_popup", array())) {
            // line 100
            echo "      <section id=\"";
            if (($context["anchor_video_popup"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_video_popup"] ?? null), "html", null, true));
            } else {
                echo "video-popup";
            }
            echo "\" class=\"video-section text-white masked section-lg\">
        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "video_popup", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "image_left", array())) {
            // line 106
            echo "      <section id=\"image-left\" style=\"height:450px\">
        ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "image_left", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "image_right", array())) {
            // line 112
            echo "      <section id=\"";
            if (($context["anchor_image_right"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_image_right"] ?? null), "html", null, true));
            } else {
                echo "image-right";
            }
            echo "\" class=\"features section\">
        ";
            // line 113
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "image_right", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "call_to_action", array())) {
            // line 118
            echo "      <section id=\"";
            if (($context["anchor_call_to_action"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_call_to_action"] ?? null), "html", null, true));
            } else {
                echo "call-to-action";
            }
            echo "\" class=\"text-white bgc-primary section-sm\">
        ";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "call_to_action", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        if ($this->getAttribute(($context["page"] ?? null), "testimonials", array())) {
            // line 124
            echo "      <section id=\"";
            if (($context["anchor_testimonials"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_testimonials"] ?? null), "html", null, true));
            } else {
                echo "testimonials";
            }
            echo "\" class=\"reviews text-center section\">
        ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "testimonials", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 128
        echo "

    ";
        // line 130
        if ($this->getAttribute(($context["page"] ?? null), "pricing_tables", array())) {
            // line 131
            echo "      <section id=\"";
            if (($context["anchor_pricing_tables"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_pricing_tables"] ?? null), "html", null, true));
            } else {
                echo "pricing-tables";
            }
            echo "\" class=\"prices text-center masked section\" data-stellar-background-ratio=\"0.7\">
        ";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pricing_tables", array()), "html", null, true));
            echo "
      </section>
    ";
        }
        // line 135
        echo "
    ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "newsletter", array())) {
            // line 137
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
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "newsletter", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </section>
    ";
        }
        // line 147
        echo "
<!--
    ";
        // line 149
        if (($context["is_front"] ?? null)) {
            // line 150
            echo "      <section id=\"";
            if (($context["anchor_contact_details"] ?? null)) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["anchor_contact_details"] ?? null), "html", null, true));
            } else {
                echo "contact";
            }
            echo "\" class=\"contacts text-center section\">
        ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_details", array()), "html", null, true));
            echo "
        ";
            // line 152
            if (($context["map_show"] ?? null)) {
                // line 153
                echo "          <div class=\"section-body map-layer\">
            <div id=\"map\" class=\"map\"></div>
          </div>
        ";
            }
            // line 157
            echo "      </section>
    ";
        }
        // line 159
        echo "-->
  </div><!-- /.content -->

  <footer id=\"footer\" class=\"footer text-center\">
    <div class=\"container\">
      <div class=\"social\">
        ";
        // line 165
        if (($context["footer_facebook"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_facebook"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-facebook\"></a>";
        }
        // line 166
        echo "        ";
        if (($context["footer_twitter"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_twitter"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-twitter\"></a>";
        }
        // line 167
        echo "        ";
        if (($context["footer_pinterest"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_pinterest"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-pinterest\"></a>";
        }
        // line 168
        echo "        ";
        if (($context["footer_youtube"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_youtube"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-youtube-play\"></a>";
        }
        // line 169
        echo "        ";
        if (($context["footer_linkedin"] ?? null)) {
            echo "<a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_linkedin"] ?? null), "html", null, true));
            echo "\" class=\"fa fa-2x fa-linkedin\"></a>";
        }
        // line 170
        echo "      </div>     
    </div>
    ";
        // line 172
        if (($context["footer_copyright"] ?? null)) {
            // line 173
            echo "      <div class=\"copy\">
        ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_copyright"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 177
        echo "  </footer>
</div><!-- /#layout -->

";
        // line 180
        if ($this->getAttribute(($context["page"] ?? null), "modal", array())) {
            // line 181
            echo "  <div id=\"request\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <span class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</span>
\t</div>
        <div class=\"modal-body text-center\">
    ";
            // line 188
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
        return "themes/vanessa/templates/page--node--19.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 188,  355 => 181,  353 => 180,  348 => 177,  342 => 174,  339 => 173,  337 => 172,  333 => 170,  326 => 169,  319 => 168,  312 => 167,  305 => 166,  299 => 165,  291 => 159,  287 => 157,  281 => 153,  279 => 152,  275 => 151,  266 => 150,  264 => 149,  260 => 147,  251 => 141,  239 => 137,  237 => 136,  234 => 135,  228 => 132,  219 => 131,  217 => 130,  213 => 128,  207 => 125,  198 => 124,  196 => 123,  193 => 122,  187 => 119,  178 => 118,  176 => 117,  173 => 116,  167 => 113,  158 => 112,  156 => 111,  153 => 110,  147 => 107,  144 => 106,  142 => 105,  139 => 104,  133 => 101,  124 => 100,  122 => 99,  116 => 95,  109 => 91,  105 => 89,  103 => 88,  97 => 87,  94 => 86,  88 => 83,  85 => 82,  83 => 81,  74 => 75,  67 => 71,  63 => 70,  55 => 69,  43 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/vanessa/templates/page--node--19.html.twig", "/var/www/test.2movepeople.dk/public_html/themes/vanessa/templates/page--node--19.html.twig");
    }
}

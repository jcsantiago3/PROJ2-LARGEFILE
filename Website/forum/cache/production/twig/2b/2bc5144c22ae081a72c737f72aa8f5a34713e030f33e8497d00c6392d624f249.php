<?php

/* posting_topic_review.html */
class __TwigTemplate_33a44830232152b3c11d9ecd5f6a93ee59df60d39e64f33339caa6d4d946c7f2 extends Twig_Template
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
        // line 1
        echo "
<h3 id=\"review\" class=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
</h3>

<div id=\"topicreview\" class=\"topicreview\">
<script type=\"text/javascript\">
// <![CDATA[
\tbbcodeEnabled = ";
        // line 10
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
// ]]>
</script>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "
\t";
            } elseif ($this->getAttribute(            // line 19
$context["topic_review_row"], "S_POST_DELETED", array())) {
                // line 20
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 22
                echo $this->getAttribute($context["topic_review_row"], "L_DELETE_POST", array());
                echo "
\t";
            } else {
                // line 24
                echo "\t<div class=\"post ";
                if (($this->getAttribute($context["topic_review_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (($this->getAttribute($context["topic_review_row"], "POST_ID", array()) == (isset($context["REPORTED_POST_ID"]) ? $context["REPORTED_POST_ID"] : null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 27
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 28
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">
\t\t\t<h3><a href=\"#pr";
            // line 29
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t\t";
            // line 31
            if ((($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array())) || $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array()))) {
                // line 32
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 33
                if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                    // line 34
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 35
                    echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 36
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 40
                echo "\t\t\t";
                if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                    // line 41
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 42
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo ", '";
                    echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("WROTE"), "js");
                    echo "', {post_id:";
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo ",time:";
                    echo $this->getAttribute($context["topic_review_row"], "POST_TIME", array());
                    echo ",user_id:";
                    echo $this->getAttribute($context["topic_review_row"], "USER_ID", array());
                    echo "});\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 43
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 47
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 49
            echo "
\t\t\t";
            // line 50
            // line 51
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 52
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 53
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 56
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
            echo "
\t\t\t</p>
\t\t\t";
            // line 61
            // line 62
            echo "
\t\t\t<div class=\"content\">";
            // line 63
            echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 65
            if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 66
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 69
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 73
            echo "
\t\t\t";
            // line 74
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 75
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t";
            }
            // line 77
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div>

<hr />

<p>
\t<a href=\"";
        // line 86
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            echo "#report";
        } else {
            echo "#postingbox";
        }
        echo "\" class=\"top\">
\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
        // line 87
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
        echo "</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 87,  271 => 86,  264 => 81,  255 => 77,  247 => 75,  245 => 74,  242 => 73,  238 => 71,  229 => 69,  225 => 68,  221 => 67,  218 => 66,  216 => 65,  211 => 63,  208 => 62,  207 => 61,  197 => 59,  191 => 56,  184 => 55,  178 => 53,  176 => 52,  173 => 51,  172 => 50,  169 => 49,  165 => 47,  156 => 43,  138 => 42,  135 => 41,  132 => 40,  125 => 36,  119 => 35,  116 => 34,  114 => 33,  111 => 32,  109 => 31,  102 => 29,  98 => 28,  95 => 27,  81 => 24,  76 => 22,  72 => 20,  70 => 19,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  53 => 13,  47 => 10,  35 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_topic_review.html", "");
    }
}

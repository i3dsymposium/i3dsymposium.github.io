---
layout: default2025
title: Sponsored Talks

keynotes_definition:
  - title: "title of the presentation"
    video: "optional, link to youtube video"
    author: "name & affiliation of the author"
    headshot: "filename of a picture of the author"
    abstract: |
      abstract of the presentation (optional)
    bio: |
      bio of the author (optional)
  - or:
  - title:
    video: "optional, link to youtube video"
    abstract: |
      abstract of the presentation (optional)
    authors:
      - name: "name & affiliation of the author"
        headshot: "filename of a picture of the author"
        bio: |
          bio of the author (optional)

keynotes:
  - title: "Neural Clothing on Mobile"
    company: "Arm"
    author: "Mina Dimova"
    headshot: "img/minadimova.jpg"
    abstract: |
      Realistic dynamic garment deformation on arbitrary meshes remains challenging, as existing Machine Learning approaches often compromise either on quality of the deformation, generalization or processing requirement. This makes dynamic garment deformation unsuitable for real-time applications on portable and handheld/mobile devices.

      In this talk we will discuss some of the challenges when creating compelling clothing behaviour for mobile and ways to address them. We will present an optimized approach using a Graph Attention Network able to predict static and dynamic cloth deformations of worn garments. Our method addresses the performance limitations of Graph Neural Networks, while taking advantage of multi-level message passing and unsupervised learning. We review the requirements for a wide adoption of neural clothing models in mobile devices and possible future directions.

    bio: |
      Mina Dimova is a Principal Software Engineer at Arm where she has worked in multiple teams on Research and Development in graphics and machine learning.
      
      She is currently working in Developer Advocacy exploring emerging use-cases for showcasing Arm’s latest technology and helping shape future hardware generations.
      
      She has a MSc in Computer Graphics, Vision and Imaging from UCL, London.

---

{::options toc_levels="1" /}

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


{% for keynote in page.keynotes %}

{% comment -%}
# Making a short title for the quick access link
{%- endcomment -%}
{%- if keynote.title -%}
  {%- assign title_parts = keynote.title | split: ":" -%}
  {%- if title_parts.size > 1 -%}
    {%- assign keyn_title = title_parts[0] | downcase | split: " " | join: "-" -%}
  {%- else -%}
    {%- assign keyn_title = keynote.title | downcase | split: " " | slice: 0, 5 | join: "-" -%}
  {%- endif %}
{%- else -%}
  {%- capture keyn_title %}Keynote{{forloop.index}}{% endcapture -%}
{%- endif %}


{% if keynote.title -%}
# {{keynote.title}}
{: #{{keyn_title}} }
{%- else -%}
# TBA
{: #{{keyn_title}} }
{%- endif %}

## {{keynote.company}}
{: #Company{{forloop.index}} }

{% if keynote.video -%}
[Watch Video]({{keynote.video}}){: .button target="_blank"}
{%- endif %}

{% if keynote.headshot -%}
![]({{keynote.headshot}}){: .keynote-headshot}
{%- endif %}

{% if keynote.abstract -%}
### Abstract
{{ keynote.abstract | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
{%- endif %}


{% if keynote.authors %}
  {%- for author in keynote.authors %}
### {{author.name}}
  {%- if author.headshot %}
![]({{author.headshot}}){: .keynote-headshot}
  {%- endif %}

  {%- if author.bio %}
#### Bio
{{ author.bio | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
  {%- endif %}
  {% endfor -%}

{% else -%}


  {% if keynote.bio -%}

{% unless keynote.authors %}
### {{keynote.author}}
{% endunless %}

#### Bio
{{ keynote.bio | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
  {%- endif %}
{%- endif %}

{%unless forloop.last %}
---
{% endunless %}

{% endfor %}

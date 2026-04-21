---
layout: default2026
title: Keynote Presentations

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
  - title: "Title: TBA"
    author: "Blake Taylor"
    bio: |
      Blake Taylor is the Technical Lead for Meta Horizon Engine (MHE), where he leads the architecture and delivery of Meta’s native engine for Horizon—raising the bar on performance, visual fidelity, and scalability across products and teams. He has spent his career building real-time graphics and simulation systems across platforms, from mixed reality to GPUs and game engines. Prior to Meta, Blake served as Magic Leap’s executive technical lead for graphics, setting mixed reality rendering strategy and end-to-end architecture while leading teams delivering the graphics stack and perception platform. Earlier, he worked at Intel on Direct3D driver performance and game/ISV enablement across Larrabee and Intel integrated GPUs, and at Raytheon on theater-scale real-time visualization and simulation.


---

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

{% unless keynote.authors %}
### {{keynote.author}}
{% endunless %}

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

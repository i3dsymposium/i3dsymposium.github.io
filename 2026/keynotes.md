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
  - title: "Title: TBA"
    author: "Kayvon Fatahalian"
    headshot: "img/Kayvon_Fatahalian.jpg"
    bio:
      Kayvon Fatahalian is Associate Professor of Computer Science at Stanford University, where he leads a research group building computing systems for advanced computer graphics and AI applications. His group's recent work spans high-performance simulation of virtual environments for AI training including the Madrona game engine, designed to simulate thousands of environments at millions of frames per second, large-scale video analysis (from a decade of US cable TV news to broadcast tennis video turned into controllable, interactive characters that look and behave like star players), and human-in-the-loop machine learning systems for creative workflows and rapid model development. Before joining Stanford, he was a faculty member at Carnegie Mellon University, where he taught parallel computer architecture and visual computing systems. He earned his Ph.D. at Stanford in 2011 with a dissertation on evolving the real-time graphics pipeline for micropolygon rendering, and his work appears regularly at SIGGRAPH, I3D, and High Performance Graphics.


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

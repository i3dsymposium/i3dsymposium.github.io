---
layout: default2025
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
  - title: "ReSTIR: Traveling the Path of Reuse"
    author: "Chris Wyman"
    headshot: "img/chriswyman.jpg"
    abstract: |
      Over the last 6 years, spatiotemporal importance resampling (aka ReSTIR) progressed from a crazy research accident to driving the high-end light transport of at least a half dozen shipped games.  Spatial and temporal reuse of lights, paths, and other samples is key to its success, as modern real-time renderers cannot afford anywhere close to the ray budgets of film and VFX.  In real-time, amortizing expensive ray costs is *required*, not just nice to have.

      In this talk, we will explore how ReSTIR came about, why I think it helped drive adoption of real-time ray tracing, balancing the demands of engineering versus research to keep moving forward, what technology transfer looks like in industrial research, where ReSTIR is going, what challenges we still need to tackle, and how you can get involved.

    bio: |
      Chris Wyman is a Distinguished Research Scientist at NVIDIA in Redmond, Washington.
      
      His research covers physically-based rendering and light transport, including applications to differentiable and inverse rendering.

      For the past five years he has served as a lead ReSTIR evangelist, teacher, and mentor, aiming to help guide the work of many other talented researchers and engineers to reach the next generation of light transport algorithms while remaining real time.
      
      Chris has a PhD from the University of Utah and a BS from the University of Minnesota.



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

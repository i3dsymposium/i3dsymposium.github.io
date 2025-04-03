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
      Over the last 6 years, spatiotemporal importance resampling (aka ReSTIR) progressed from a crazy research accident to driving the high-end light transport of at least a half dozen shipped games. Spatial and temporal reuse of lights, paths, and other samples is key to its success, as modern real-time renderers cannot afford anywhere close to the ray budgets of film and VFX. In real-time, amortizing expensive ray costs is *required*, not just nice to have.

      In this talk, we will explore how ReSTIR came about, why I think it helped drive adoption of real-time ray tracing, balancing the demands of engineering versus research to keep moving forward, what technology transfer looks like in industrial research, where ReSTIR is going, what challenges we still need to tackle, and how you can get involved.

    bio: |
      Chris Wyman is a Distinguished Research Scientist at NVIDIA in Redmond, Washington.
      
      His research covers physically-based rendering and light transport, including applications to differentiable and inverse rendering.

      For the past five years he has served as a lead ReSTIR evangelist, teacher, and mentor, aiming to help guide the work of many other talented researchers and engineers to reach the next generation of light transport algorithms while remaining real time.
      
      Chris has a PhD from the University of Utah and a BS from the University of Minnesota.

  - title: "AI and the coming XR Singularity"
    author: "Ken Perlin"
    headshot: "img/kenperlin.jpg"
    abstract: |
      We are now only a few years away from a time when our smartphones will be replaced by blended reality glasses. This will be as big a revolution as was the Web in 1993 and the iPhone in 2007. But this time we will also have AI, so the changes in our daily lives will be even more fundamental and profound. In this talk I will explore the ways that our shared reality might change, as we approach the coming XR Singularity.

    bio: |
      Ken Perlin, a professor in the Department of Computer Science at New York University, directs the Future Reality Lab. His research interests include socially shared blended reality, computer graphics and animation, user interfaces and education.
      
      He is a Fellow of the National Academy of Inventors. He received an Academy Award for Technical Achievement from the Academy of Motion Picture Arts and Sciences for his noise and turbulence procedural texturing techniques, which are widely used in feature films and television, as well as membership in the ACM/SIGGRAPH Academy, the 2020 New York Visual Effects Society Empire Award and the 2008 ACM/SIGGRAPH Computer Graphics Achievement Award. He serves on the program committee of the AAAS, was general chair of the UIST2010 conference, and has been a featured artist at the Whitney Museum of American Art.
      
      He received his Ph.D. in Computer Science from NYU, and a B.A. in theoretical mathematics from Harvard. Before working at NYU he was Head of Software Development at R/GREENBERG Associates in New York, NY. Prior to that he was the System Architect for computer generated animation at MAGI, where he worked on TRON.


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

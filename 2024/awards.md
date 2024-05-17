---
layout: default2024
title: Awards

two_thirds_content: true

awards_definition:
  - title: "Title of the award"
    prize: "The prize of the award"
    sponsor: "The sponsor of the prize"
    video: "Link to video, at the opening timestamp"
    papers:
      - title: "Paper title"
        authors: "Authors, all separated by commas"


awards:
  - title: "Best Paper"
    sponsor: "NVIDIA"
    papers:
      - title: "Filtering After Shading With Stochastic Texture Filtering"
        authors: "Matt Pharr, Bartlomiej Wronski, Marco Salvi, Marcos Fajardo"

  - title: "Best Student Paper"
    prize: "NVIDIA GeForce RTX 4080"
    sponsor: "NVIDIA"
    papers:
      - title: "FaceFolds: Meshed Radiance Manifolds for Efficient Volumetric Rendering of Dynamic Faces"
        authors: "Safa Medin, Gengyan Li, Ruofei Du, Stephan Garbin, Philip Davidson, Gregory Wornell, Thabo Beeler, Abhimitra Meka"

  - title: "Best Paper Runner Up"
    sponsor: "NVIDIA"
    papers:
      - title: "ZH3: Quadratic Zonal Harmonics"
        authors: "Thomas Roughton, Peter-Pike Sloan, Ari Silvennoinen, Michal Iwanicki, Peter Shirley"

      - title: "Transforming a Non-Differentiable Rasterizer into a Differentiable One with Stochastic Gradient Estimation"
        authors: "Thomas Deliot, Eric Heitz, Laurent Belcour"

  - title: "Best Paper Audience Choice"
    prize: "NVIDIA GeForce RTX 4080"
    sponsor: "NVIDIA"
    papers:
      - title: "Transforming a Non-Differentiable Rasterizer into a Differentiable One with Stochastic Gradient Estimation"
        authors: "Thomas Deliot, Eric Heitz, Laurent Belcour"

  - title: "Best Poster Audience Choice"
    prize: "MSI GeForce RTX 3060 Ventus 2X 12G"
    papers:
      - title: "Real-time Curls"
        authors: "Matheus de Moraes Cavazotti, André Luiz Pires Guedes"

  - title: "Best Reviewer"
    prize: "AMD Radeon RX 7900 XT"
    sponsor: "AMD"
    papers:
      - title: "Romain Pacanowski"
      - authors: " "

---

<!-- * This bulletpoint is necessary for kramdown to generate the ToC
{:toc} -->

{% for award in page.awards %}

{% if forloop.length > 1 -%}
# {{ award.title }}
{: #{{ award.title | downcase | split: " " | join: "-" }} }
{%- else -%}
# {{ award.title }}
{%- endif %}

{% comment %}<!-- The various "-" in the following block are made so that the .unstyled class is always applied to the list, not to the button or the definition list that follows -->{% endcomment -%}
{% if award.prize -%}
- Prize: {{ award.prize }}{% endif %}
{% assign presentations_video = award.video | strip -%}
{%- assign qa_video = award.qa_video | strip -%}
{%- if presentations_video != empty -%}
- [Watch Video]({{ award.presentations_video }}){: .button target="_blank"}
{% endif -%}
{: .unstyled }


{: .papers-list }
{% for paper in award.papers %}
{%- comment %}<!-- This next tag is absolutely horrendous but it is the only thing that seems to work to handle newlines in a nice way. Basically, we convert markdown to html, and then we ensure after any newline there are two spaces, so that the dd will not be broken -->{% endcomment -%}
{%- if paper.abstract -%}{%- assign abstract = paper.abstract | strip | escape_once | markdownify | replace: "
", "
  " %}{% endif %}

{{ paper.title }}
{%- comment %}<!-- Authors of the paper, separated by comma, with an "and" between the last two -->{% endcomment %}
: {% assign authors = paper.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}

{%- comment %}<!-- Links and meta info for the paper: original journal, doi, preprint, video presentation -->{% endcomment %}
: {% assign journal = paper.journal | strip -%}
  {%- comment %}<!-- journal and "live presentation only" -->{% endcomment -%}

{% endfor %}

{% unless forloop.last %}
---
{% endunless %}

{% endfor %}


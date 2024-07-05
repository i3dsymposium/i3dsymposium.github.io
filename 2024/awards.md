---
layout: default2024
title: Awards

awards_definition:
  - title: "Title of the award"
    prize: "The prize of the award"
    papers:
      - title: "Paper title"
        authors: "Authors, all separated by commas"


awards:
  - title: "Best Paper"
    papers:
      - title: "Filtering After Shading With Stochastic Texture Filtering"
        authors: "Matt Pharr, Bartlomiej Wronski, Marco Salvi, Marcos Fajardo"

  - title: "Best Paper Runner-Ups"
    papers:
      - title: "ZH3: Quadratic Zonal Harmonics"
        authors: "Thomas Roughton, Peter-Pike Sloan, Ari Silvennoinen, Michal Iwanicki, Peter Shirley"

      - title: "Transforming a Non-Differentiable Rasterizer into a Differentiable One with Stochastic Gradient Estimation"
        authors: "Thomas Deliot, Eric Heitz, Laurent Belcour"

  - title: "Best Student Paper"
    prize: "NVIDIA GeForce RTX 4080"
    papers:
      - title: "FaceFolds: Meshed Radiance Manifolds for Efficient Volumetric Rendering of Dynamic Faces"
        authors: "Safa Medin, Gengyan Li, Ruofei Du, Stephan Garbin, Philip Davidson, Gregory Wornell, Thabo Beeler, Abhimitra Meka"

  - title: "Best Paper Presentation - Audience Choice"
    prize: "NVIDIA GeForce RTX 4080"
    papers:
      - title: "Transforming a Non-Differentiable Rasterizer into a Differentiable One with Stochastic Gradient Estimation"
        authors: "Thomas Deliot, Eric Heitz, Laurent Belcour"

  - title: "Best Poster - Audience Choice"
    prize: "MSI GeForce RTX 3060 Ventus 2X 12G"
    papers:
      - title: "Real-time Curls"
        authors: "Matheus de Moraes Cavazotti, André Luiz Pires Guedes"

  - title: "Best Reviewer"
    prize: "AMD Radeon RX 7900 XT"
    papers:
      - title: "Romain Pacanowski"

---

{::options toc_levels="1" /}

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

The awards were presented during the closing session on the last day of the conference. You can [watch it here](https://youtu.be/rHwmYO10AF4). Best paper awards were selected using the scores given by the reviewers. The awards for best paper presentation and for the best poster were selected on a vote by the audience. Best reviewer was selected by the paper chairs among the participating reviewers.

{% for award in page.awards %}

# {{ award.title }}

{% if award.prize -%}
Prize: {{ award.prize }}
{: .small}
{%- endif %}

{% for paper in award.papers %}

## {{ paper.title }}
{: .medium-thin }
{% if forloop.index == 1 %}{: .no-margin-top }{% endif %}

{% comment %}<!-- Authors of the paper, separated by comma, with an "and" between the last two -->{% endcomment -%}
{%- if paper.authors %}
{% assign authors = paper.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}
{%- endif %}

{% endfor %}

{% unless forloop.last %}
---
{% endunless %}

{% endfor %}


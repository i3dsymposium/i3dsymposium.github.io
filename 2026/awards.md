---
layout: default2026
title: Awards

awards_definition:
  - title: "Title of the award"
    prize: "The prize of the award"
    papers:
      - title: "Paper title"
        authors: "Authors, all separated by commas"
        doi_link: "DOI link"


awards:
  - title: "Best Papers"
    papers:
      - title: "ReSTIR PT Enhanced: Algorithmic Advances for Faster and More Robust ReSTIR Path Tracing"
        authors: "Daqi Lin, Markus Kettunen, Chris Wyman"
        doi_link: "https://doi.org/10.1145/3804494"

      - title: "Gen-C: Populating Virtual Worlds with Generative Crowds"
        authors: "Andreas Panayiotou, Panayiotis Charalambous, Ioannis Karamouzas"
        doi_link: "https://doi.org/10.1145/3804500"

  - title: "Best Student Paper"
    papers:
      - title: "Improving Spatial Domain Repetition of Implicit Surfaces"
        authors: "Clément Magniez, Cédric Zanni"
        doi_link: "https://doi.org/10.1145/3804498"

  - title: "Best Poster - Audience Choice"
    papers:
      - title: "Mobile-DDGI: Lightweight Probe-Based Global Illumination via Adaptive Budget Allocation"
        authors: "Taekgeun You, Woong Seo, Donghee Han, Insung Ihm"
---

{::options toc_levels="1" /}

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

The awards were presented during the closing session on the last day of the conference. Best paper awards were selected using the scores given by the reviewers. The awards for the best poster was selected on a vote by the audience.

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
{%- assign doi = paper.doi_link | strip -%}
{%- if doi != empty %}

<a href="{{ doi }}">DOI link</a>
{%- endif %}

{% endfor %}

{% unless forloop.last %}
---
{% endunless %}

{% endfor %}


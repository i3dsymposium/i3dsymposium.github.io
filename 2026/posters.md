---
layout: default2026
title: Posters and Demos Program

two_thirds_content: true

#fast_forward_video: ""

sessions_definition:
  - title: "Session title"
    entries:
      - title: "Poster or demo title"
        authors: "Authors, all separated by commas"
        preprint: "link to the preprint provided by authors"
        doi: "link to doi"
        abstract:  |
          some text here, can be multiline. If separated by a single line, it will be converted to <br>, otherwise it will be converted to separate <p> tags


sessions:
  - title: "Session 1: Posters"
    entries:
      - title: "Scene2Scene: LLM-driven 3D Spatial Blockout for Guided AI Video Synthesis"
        authors: "Yutong Alison Mei, Wei Cai"
      - title: "Weber: An Efficient and Interactive Framework for Crafting and Simulating Physics in the Web Browser"
        authors: "Chengguizi Han, Alon Flor, Timothy Meehan, Mridul Aanjaneya"
      - title: "Photon-Driven Neural Radiance Caching"
        authors: "Julian Stamm, Tom Kneiphof, Reinhard Klein"
      - title: "Reliability of Gaze Prediction for Stylized and Transformed Images"
        authors: "James Youngblood, Rogelio Cardona-Rivera"
      - title: "Mesh-Driven 3D Gaussian Splat Manipulation"
        authors: "Lander Durie, Bert Ramlot, Peter Lambert, Glenn Van Wallendael"
      - title: "Infinite Dungeon Generation Constrained by Sketches using Growing Graph Wave Function Collapse"
        authors: "Markus Eger"
      - title: "Optimal exponents for the Schlick reflectance approximation"
        authors: "Nelson Max"
      - title: "Dynamic Wrinkling on Coarsely-Meshed Cloth"
        authors: "Rupesh Kumar, Sabhya Khurana, Rahul Narain"


  - title: "Session 1: Demos"
    entries:
      - title: "Spiral VR: A Virtual Reality Sports Game for Studying Aim Assistance Under Pressure"
        authors: "Hayes Meekins, Emma Barger, Pedro Acevedo"
      - title: "Ultra Low Latency Via Integrating Renderer and Display"
        authors: "Evan Jonson, Aaron Fulmer, Benjamin Watson"
      - title: "Pacing-Aware Level Generation with Dynamic Event Control"
        authors: "John Brazell, Justus Robertson"



  - title: "Session 2: Posters"
    entries:
      - title: "Towards Field Experiments in Esports Competition"
        authors: "Arjun Madhusudan, Benjamin Watson, Josef Spjut, Ben Boudaoud, Joohwan Kim"
      - title: "Semantic-Geometric Decoupling for Universal Spatial Anchoring in Extended Reality"
        authors: "Danila Kharitonenkov, Vuthea Chheang"
      - title: "Evaluation of 3D Locomotion in Cycling-Based VR Exergames"
        authors: "Dominik Lange-Nawka, Elliott Wen, Burkhard Wünsche"
      - title: "Exploring Real-Time Neural Affective Responses in a Virtual Reality Horror Experience"
        authors: "Maryann Godje, Javier Gonzalez-Sanchez"
      - title: "Mobile-DDGI: Lightweight Probe-Based Global Illumination via Adaptive Budget Allocation"
        authors: "Taekgeun You, Woong Seo, Donghee Han, Insung Ihm"
      - title: "Application of Implicit Surface and Signed Distance Field to Wellbore Data Visualization"
        authors: "Thibaut Andrieu, Hendrik Schroots"
      - title: "What Do Competitive Players Do With Their Settings? A Multi-Game Esports Configuration Survey"
        authors: "Ashish Rajpurohit, Arjun Madhusudan, Benjamin Watson"


  - title: "Session 2: Demos"
    entries:
      - title: "Stack-Aware Enemy AI in a Roguelike Deck-Builder"
        authors: "Tamanna Taneja, Justus Robertson"
      - title: "Rayauth: Camera-Only Mobile Authentication of Cards via Guided Capture of Spatiotemporal Diffractive Optical Signatures"
        authors: "Shuichi Kurabayashi, Hiroki Hanaoka"
      - title: "An Authoring Framework for LLM-Based Drama Managers"
        authors: "Tiffany Wang, Yuqian Sun, Yi Wang, Melissa Roemmele, Shm Garanganao Almeda, John Joon Young Chung, Max Kreminski"
      - title: "Cygames Demo"
        authors: "Cygames"


---

The following posters and demos will be presented during the conference.
<!-- They are published in the ACMDL as the [Companion Proceedings of I3D](TODO) -->

{% if page.fast_forward_video -%}
[Watch Fast-Forward Video]({{page.fast_forward_video}}){: .button target="_blank"}
{%- endif %}


{% for session in page.sessions %}

# {{ session.title }}
{: #{{ session.title | downcase | slugify: "latin" }} }

{: .papers-list }
{% for entry in session.entries %}
{%- comment %}<!-- This next tag is absolutely horrendous but it is the only thing that seems to work to handle newlines in a nice way. Basically, we convert markdown to html, and then we ensure after any newline there are two spaces, so that the dd will not be broken -->{% endcomment -%}
{%- if entry.abstract -%}{%- assign abstract = entry.abstract | strip | escape_once | markdownify | replace: "
", "
  " %}{% endif %}

{{ entry.title }}
{%- comment %}<!-- Authors of the entry, separated by comma, with an "and" between the last two -->{% endcomment %}
: {% assign authors = entry.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}

{%- comment %}<!-- Links for the entry -->{% endcomment %}
{% assign preprint = entry.preprint | strip -%}
{%- assign doi = entry.doi | strip -%}
{%- if preprint != empty or doi != empty %}
: {%- comment %}<!-- links, separated by commas -->{% endcomment -%}
  {%- if preprint != empty -%}
  <a href="{{ preprint }}">preprint</a>{% if doi != empty %}, {% endif -%}
  {%- endif %}
  {%- if doi != empty -%}
  <a href="{{ doi }}">DOI link</a>
  {%- endif %}
{%- endif %}

{% if entry.abstract -%}
: <details>
  <summary>Abstract</summary>

  {{ abstract }}

  </details>
{%- endif %}

{% endfor %}

{% unless forloop.last %}
---
{% endunless %}

{% endfor %}
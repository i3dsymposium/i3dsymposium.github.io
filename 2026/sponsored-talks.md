---
layout: default2026
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
  - title: "An Art University and Game Company Partnership for Co-Creation with AI"
    company: "Cygames & Tokyo University of the Arts"
    abstract: |
      We present an industry-academia research agenda for co-creation with AI in games and interactive media, developed through a collaboration between Cygames and Tokyo University of the Arts. Our central argument is that next-generation generative systems for creative production should be designed not primarily for automation or replacement, but as infrastructures for sustained collaboration with artists. From this perspective, we discuss three research directions. First, drawing on case studies from game production, we show that AI systems can be substantially improved when artists participate directly in the design of data preparation, curation, and evaluation pipelines. Second, we argue that artists should be understood not merely as end users of AI tools, but as active contributors who define quality targets, steer iterative experimentation, and provide historically and aesthetically grounded criteria for evaluation. Third, as an alternative to conventional approaches that rely heavily on web-scale data, we discuss the potential of generative modeling under small- to medium-scale training regimes tailored to individual artists, production teams, and specific creative projects.
    authors:
      - name: "Shuichi Kurabayashi, Ph.D. — Cygames"
        headshot: "img/shuichikurabayashi.jpg"
        bio: |
          Shuichi Kurabayashi is a researcher, educator, and technology executive whose work lies at the intersection of generative AI, large-scale data systems, and user interface innovation. He serves as Technical Advisor at Cygames and Director of Cygames Research, while also holding academic appointments at Keio University and Tokyo University of Science.

          He earned his Ph.D. in Media and Governance from Keio University, where he began his academic career as a full-time lecturer. He later took on the roles of Technical Advisor at Cygames and Director of Cygames Research, and since 2026 has also served as a Board Director and Chief Research Officer of Cygames AI Studio. In the same year, he joined Tokyo University of Science as a cross-appointed Professor.
      - name: "Takashi Kiriyama, Ph.D. — Tokyo University of the Arts"
        headshot: "img/takashikiriyama.jpg"
        bio: |
          Takashi Kiriyama is Professor and Dean of the Graduate School of Film and New Media at Tokyo University of the Arts. He received his Doctor of Engineering from the University of Tokyo and previously held research and academic appointments at the University of Tokyo, Stanford University, and JST.

          His work centers on interactive media and technologies that expand and support creative practice. Since April 2026, Tokyo University of the Arts launched its new master's program in Games and Interactive Arts, a major new initiative that he helps lead as Dean and professor.

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
{: #{{keynote.company | split: " " | join: "-" | downcase }} }
{%- else -%}
# TBA
{: #{{keyn_title}} }
{%- endif %}

## {{keynote.company}}

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

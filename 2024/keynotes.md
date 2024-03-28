---
layout: default2024
title: Keynote Presentations

keynotes_definition:
  - title: "title of the presentation (optional, will use author's name instead if missing)"
    video: "optional, link to youtube video"
    author: "name & affiliation of the author"
    headshot: "filename of a picture of the author"
    abstract: |
      abstract of the presentation (optional)
    bio: |
      bio of the author (optional)

keynotes:
  - author: "Sylvain Lefebvre, Senior Researcher, Inria"
    headshot: "img/sylvainlefebvre_headshot.jpg"
    bio: |
      Sylvain Lefebvre is a senior researcher at Inria (France), where he leads the MFX team.

      His main research focus is on geometry modeling, processing and procedural synthesis in the context of additive manufacturing, most often targeting GPU algorithms. Sylvain received the EUROGRAPHICS Young Researcher Award in 2010.

      From 2012 to 2017 he was the principal investigator of the ERC ShapeForge (StG) and IceXL (PoC) projects. He created and is the lead developer of the IceSL software for additive manufacturing.
      
      Sylvain is now investigating the use of FPGA architectures for his research, for education and for fun. He develops the Silice language for this purpose.

---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


{% for keynote in page.keynotes %}

{% if keynote.title -%}
# {{keynote.title}}
{: #Keynote{{forloop.index}} }

### {{keynote.author}}

{%- else -%}
# {{keynote.author}}
{: #Keynote{{forloop.index}} }

{%- endif %}

{% if keynote.video -%}
[Watch Video]({{keynote.video}}){: .button target="_blank"}
{%- endif %}

![]({{keynote.headshot}}){: .keynote-headshot}

{% if keynote.abstract -%}
#### Abstract
{{ keynote.abstract | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
{%- endif %}

{% if keynote.bio -%}
#### Bio
{{ keynote.bio | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
{%- endif %}

{%unless forloop.last %}
---
{% endunless %}

{% endfor %}

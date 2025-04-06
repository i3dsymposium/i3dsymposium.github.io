---
layout: default2025
title: Sponsored Talks

keynotes_definition:
  - title: "title of the presentation"
    company: "affiliation of the speaker"
    video: "optional, link to youtube video"
    abstract: |
      abstract of the presentation (optional)

    speakers:
      - List
      - of
      - Names

keynotes:
  - title: "Neural Clothing on Mobile"
    company: "Arm"
    speakers:
      - Mina Dimova
    abstract: |
      Realistic dynamic garment deformation on arbitrary meshes remains challenging, as existing Machine Learning approaches often compromise either on quality of the deformation, generalization or processing requirement. This makes dynamic garment deformation unsuitable for real-time applications on portable and handheld/mobile devices.

      In this talk we will discuss some of the challenges when creating compelling clothing behaviour for mobile and ways to address them. We will present an optimized approach using a Graph Attention Network able to predict static and dynamic cloth deformations of worn garments. Our method addresses the performance limitations of Graph Neural Networks, while taking advantage of multi-level message passing and unsupervised learning. We review the requirements for a wide adoption of neural clothing models in mobile devices and possible future directions.




---

{::options toc_levels="1" /}

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


{% for keynote in page.keynotes %}

# {{keynote.title}}
{: #{{keynote.company | split: " " | join: "" }} }


{% if keynote.subtitle -%}
### {{keynote.subtitle}}
{: .keynote-subtitle }
{%- endif %}

## {{keynote.company}}
{: #Company{{forloop.index}} }

{% if keynote.video -%}
[Watch Video]({{keynote.video}}){: .button target="_blank"}
{%- endif %}

{% if keynote.abstract -%}
{{ keynote.abstract | strip | escape_once | newline_to_br | replace: "<br />
<br />
", "

" }}
{%- endif %}

### Presented by

{% for speaker in keynote.speakers %}
- {{ speaker }}
{% endfor %}

{%unless forloop.last %}
---
{% endunless %}

{% endfor %}

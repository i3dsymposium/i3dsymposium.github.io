---
layout: default2024
title: Sponsored Talks

keynotes_definition:
  - title: "title of the presentation"
    company: "affiliation of the speaker"
    video: "optiona, link to youtube video"
    abstract: |
      abstract of the presentation (optional)

    speakers:
      - List
      - of
      - Names

keynotes:
  - title: "3D Tiles: Bringing Computer Graphics Research Into Production"
    company: "Cesium"
    speakers:
      - Sean Lilley
    video: "https://youtu.be/DPHDNnICrX0"
    abstract: |
      This talk provides a systems-level overview of 3D Tiles, an open standard for rendering geospatial-accurate massive models. Geospatial data comes in many forms including high-resolution photogrammetry models, semantically-rich CAD models, massive point clouds, and global terrain and imagery. Real world data is often gigabytes to terabytes in size, unable to fit on a single drive let alone in GPU memory.
 
      We'll explore spatial data structures, level of detail, culling, batching, compression, and other foundational techniques that have informed the design of 3D Tiles. We'll also suggest future areas of research including use-case specific traverse algorithms, mixed geometry representations (e.g. mesh vs. voxels vs. Gaussian splats), time-dynamic data, and editing.


  - title: "Triangle Visibility Buffer 2.0"
    company: "The Forge Interactive"
    speakers:
      - David Erler
      - Wolfgang Engel
    video: "https://youtu.be/kWLev9CoQdg"
    abstract: |
      This article updates the development between 2018 and today and features new major developments in the realm of the Triangle Visibility Buffer architecture.

      With the ever improving performance of GPUs, we found it worth investigating an approach which completely bypasses the traditional drawing APIs and pipeline stages.

      In essence, instead of preparing and massaging the data so that it fits into the indirect draw call workflow we "draw" the triangle IDs with one compute shader into the Visibility Buffer.

      In other words draw calls are not necessary anymore to fill the Visibility Buffer or the depth buffer. Our method does not depend on mesh shaders and therefore can run on hardware that does not support mesh shaders.

      Additionally, we eliminate the need for a graphics pipeline, render small triangles more efficiently as we do not pay additional cost for helper lanes and exploit various additional benefits.

      This simplification reduces complexity and makes code easier to read, reduces memory access to buffers and opens up the door to new opportunities like a native implementation of Order-Independent Transparency and Ray Tracing.


  - title: "The future of User Interaction in Games"
    subtitle: "Speech as a Natural Way of Interacting with Non-Playable Characters in Games"
    company: "Arm"
    speakers:
      - Roberto Lopez Mendez
      - SICONG LI
      - HONG JI LIU
    video: "https://youtu.be/302-7xemHow"
    abstract: |
      This paper showcases the future of user interaction in gaming, more natural, based on speech. The paper explains the implementation of verbal interaction with an NPC on a mobile game. Large Language Models (LLM) open new ways of interacting in gaming, but the large size and big memory footprint make using them on mobile very challenging.
      
      We have combined the standard Unity Multi-Layer Perceptron (MLP) ML-Agent model with a 33M parameter small Language Model (LM) TinyStories. TinyStories has been repurposed to be conversational. This LM drives the interaction with the user. It also communicates with the MLP brain when an action is inferred from the chat.
      
      A Unity Sentence Similarity model is responsible for filtering user input to decide whether it needs to communicate with the ML-Agent to perform an action. Running all these models locally on mobile inside a game engine like Unity has been very challenging in terms of optimization, but this paper demonstrates that it is possible. 


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

---
layout: default2024
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
  - title: "The Gates of Graphics: a deep dive into making your own Computer Graphics hardware"
    abstract: |
      We use incredibly powerful hardware everyday, from many-core CPUs to GPUs of extreme performance. This has created unprecedented and exciting opportunities, but the increase in complexity inside our computers has become hard to grasp. This makes it difficult to understand, to explain and to experiment with the hardware that lies between our code and the pixels on our screen.

      In this talk I will recount my quest to explore hardware design for Computer Graphics, using inexpensive FPGAs and modern open-source tools. Through strange examples and uncanny architectures, we will see how little it takes, in fact, to do interesting graphics effects and design your own specialized hardware. We will discuss whether and when this can make sense nowadays.

      As a researcher trained on GPUs but with a lacking background in hardware design, I'll share what I learned, what I was able to make, the mistakes and surprises I faced, the great community I met along the way, and what this can mean for us as Computer Graphics enthusiasts and researchers.

    author: "Sylvain Lefebvre, Senior Researcher, Inria"
    headshot: "img/sylvainlefebvre_headshot.jpg"
    bio: |
      Sylvain Lefebvre is a senior researcher at Inria (France), where he leads the MFX team.

      His main research focus is on geometry modeling, processing and procedural synthesis in the context of additive manufacturing, most often targeting GPU algorithms. Sylvain received the EUROGRAPHICS Young Researcher Award in 2010.

      From 2012 to 2017 he was the principal investigator of the ERC ShapeForge (StG) and IceXL (PoC) projects. He created and is the lead developer of the IceSL software for additive manufacturing.
      
      Sylvain is now investigating the use of FPGA architectures for his research, for education and for fun. He develops the Silice language for this purpose.

  - title: TBA
    authors:
      - name: "Fabio Zinno, Head of Machine Learning, EA"
        headshot: "img/fabiozinno_headshot.jpg"
        bio: |
          From an early age, video games were more than just a pastime for me - they were a window into other worlds, and the complex systems that drove them fascinated me. This curiosity led me to pursue a Master Degree in Computer Science in Milan, hoping to one day become a professional game developer.
          
          My career began with hands-on experience at Milestone in Milan, where I honed my skills developing racing games, one of my favorite genres since the epic Revs by Geoff Crammond. 
          
          Seeking to expand my horizons, I joined Electronic Arts Canada, where I delved deeper into the mechanics of gaming, focusing on character animation and physics.
          
          The 2014 SIGGRAPH conference was a game-changer for me. It opened my eyes to the untapped potential of machine learning in game development. This wasn't just an evolution; it was a revolution waiting to happen.
          
          Today, as the Head of Machine Learning at EA Sports, my goal is to harness these advanced technologies within game development, aiming to create better workflows and push the boundaries of realism and player engagement.

      - name: "Harold Chaput, Head of Product for Tech Growth, EA"
        headshot: "img/haroldchaput_headshot.jpg"
        bio: |
          Computers have been part of my imagination for as long as I can remember. I spent many a Summer day at the local Radio Shack teaching myself to program by copying code from Byte magazine. I would haunt computer stores through high school and played every game I could get my hands on.

          I did my undergraduate in Computer Studies at Northwestern and worked at an educational software company building, among other things, a simulated retail MMO to teach economics to high school students. I got my PhD in Computer Sciences from UT Austin studying neural models of infant cognitive development and their application to mobile robot control.

          In 2004 I joined Electronic Arts and spent several years as a software engineer, then as Technical Director for FIFA Gameplay, World Cup 2010 South Africa, FIFA Ultimate Team Server Dev, and Mass Effect: Andromeda. In 2017 I joined and then led AILab, an AI research team, which merged last year with the SEED to become part of EA’s central Tech Growth Strategy team. As the Head of Product for Tech Growth, I’m merging my two passions — AI and video games — to bring about the next generation of digital entertainment.


---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


{% for keynote in page.keynotes %}

# {{keynote.title}}
{: #Keynote{{forloop.index}} }

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
{% else %}
### {{keynote.author}}
{% endif %}

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
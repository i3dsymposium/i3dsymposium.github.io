---
layout: default2024
title: 2024 Committee

committee_definition:
  - chair: Name of the chair(s)
    members: # List of people performing this function
      - name: Name of the person
        link: (optional) Url to link to on the name of the person
        institution: Who they are associated with (company/university)
        email: contact email of this person
        pronouns: list of pronouns for this person, such as (he, him), (she, her), etc

steering_committee_definition: # List of members in the steering committee, by year
  - year: Year these people entered the steering committee
    members: # List of 
      - Name 1
      - Name 2

ipc_definition: # List of IPC members
  - Name, Institution


committee:
  - chair: General Chairs
    members:
      - name: Ricardo Marroquim
        link: https://graphics.tudelft.nl/~marroquim/
        institution: TU Delft, Netherlands
        email: r.marroquim@tudelft.nl
        pronouns: (he, him)
      - name: Laura Reznikov
        institution: Meta
        email: laurareznikov@gmail.com
        pronouns: (she, her)

  - chair: Papers Chairs
    members:
      - name: Erik Sintorn
        link: http://www.cse.chalmers.se/~d00sint/
        institution: Chalmers University of Technology, Sweden
        email: erik.sintorn@chalmers.se
        pronouns: (he, him)
      - name: Bart Wronski
        link: https://bartwronski.com
        institution: NVIDIA Corporation
        email: elirian@gmail.com
        pronouns: (he, they)

  - chair: Posters Chair
    members:
      - name: Markus Billeter
        link: http://newq.net/
        institution: School of Computing, University of Leeds
        email: m.billeter@leeds.ac.uk
        pronouns: (he, him)

  - chair: Program Chair
    members:
      - name: Mauricio Vives
        link: https://twitter.com/pixnblox
        institution: Autodesk, Inc.
        email: mauricio.vives@autodesk.com
        pronouns: (he, him)

  - chair: Treasurer
    members:
      - name: Xiaoxi Liu
        institution: Meta
        email: liuxiaoxicici@gmail.com
        pronouns: (she, her)

  - chair: Local Chair and Support
    members:
      - name: Jason Bodewitz
        institution: Cesium
        email: jason@cesium.com
        pronouns: (he, him)
      - name: Samantha Melanchuk
        institution: Cesium
        email: Samantha@cesium.com
        pronouns: (she, her)
      - name: Brad Shilling
        institution: Cesium
        email: Brad@cesium.com
        pronouns: (he, him)

  - chair: Publicity Chair
    members:
      - name: Roc R. Currius
        link: https://ror3d.xyz
        institution: Sony Interactive Entertainment
        email: akdm@ror3d.xyz
        pronouns: (he, him)
      - name: Zackary P. T. Sin
        link: https://zackarysin.github.io/
        institution: The Hong Kong Polytechnic University
        email: zackary-p-t.sin@polyu.edu.hk
        pronouns: (he, him)

  - chair: Additional Support
    members:
      - name: Michael Doggett
        link: https://cs.lth.se/michael_doggett/
        institution: Lund University, Sweden
        email: michael.doggett@cs.lth.se
        pronouns: (he, him)

steering_committee:
  - year: 2024
    members:
      - Ricardo Marroquim
      - Laura Reznikov
  - year: 2023
    members:
      - Erik Sintorn
      - Bart Wroński
  - year: 2022
    members:
      - Michael Doggett
      - Angelo Pesce
  - year: 2021
    members:
      - Ulf Assarsson
      - Ari Silvennoinen

ipc:
  - Ulf Assarsson, Chalmers University of Technology
  - Colin Barré-Brisebois, SEED, Electronic Arts
  - Laurent Belcour, Intel Corporation
  - Markus Billeter, University of Leeds
  - Jiri Bittner, Czech Technical University in Prague
  - Jiawen Chen, Adobe Inc.
  - Petrik Clarberg, NVIDIA
  - Marc Comino Trinidad, Universidad Rey Juan Carlos
  - Carsten Dachsbacher, Karlsruhe Institute of Technology
  - Michal Drobot, Activision, Microsoft
  - Adrien Dubouchet, Activision
  - Elena Garces, Universidad
  - Christiaan Gribble, Advanced Micro Devices, Inc.
  - Adrien Gruson, etsmtl.ca
  - Eric Guérin, LIRIS
  - John Hable, Unity Technologies
  - Sebastien Hillaire, Epic Games
  - Daniel Holden, Epic Games
  - Ludovic Hoyet, INRIA Rennes - Centre Bretagne Atlantique
  - Michal Iwanicki, Activision
  - Wallace Lages, Northeastern University
  - Shiguang Liu, Tianjin University
  - Miles Macklin, NVIDIA
  - Michael Manzke, Trinity College Dublin
  - Morgan McGuire, Roblox
  - Javier Meseguer de Paz, Next Limit Technologies
  - Zahra Montazeri, University of Manchester
  - Aline Normoyle, Bryn Mawr College
  - Chris Oat, Rockstar Games
  - Romain Pacanowski, Inria
  - Tobias Ritschel, UCL
  - Marco Salvi, NVIDIA
  - Yann Savoye, Liverpool John Moores University
  - Nicolas Savva, Autodesk, Inc.
  - Leonardo Scandolo, TomTom
  - Markus Schuetz, Vienna University of Technology
  - Omer Shapira, NVIDIA
  - Konstantin Shkurko, University of Utah
  - Ari Silvennoinen, Activision Publishing, Inc.
  - Josef Spjut, NVIDIA
  - Qi Sun, New York University
  - Tiow Seng Tan, National University of Singapore
  - Yusuke Tokuyoshi, Advanced Micro Devices, Inc.
  - Corey Toler-Franklin, University of Florida
  - Karthik Vaidyanathan, NVIDIA
  - Hongzhi Wu, Zhejiang University
  - Kui Wu, LightSpeed Studios
  - Chris Wyman, NVIDIA
  - Kun Zhou, Zhejiang University

---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

# Organizing Committee

<small>*Co-chairs are listed alphabetically*</small>


{% for chair in page.committee %}

{:.no_toc}
## {{ chair.chair }}
<ul class="three-columns">
  {% for member in chair.members -%}
  <li> 
		<b class="member-name">{% if member.link %}<a href="{{ member.link }}" target="_blank">{{ member.name }}</a>{% else %}{{ member.name }}{% endif %}</b><br>
		{% if member.institution %}{{ member.institution }}<br>{% endif %}
		{% if member.email %}<span class="e-mail" data-e-user="{{ member.email | split: '@' | first}}" data-e-domain="{{ member.email | split: '@' | last}}">&nbsp;</span><br>{% endif %}
		{{ member.pronouns }}
	</li>
  {%- endfor %}
</ul>
{% endfor %}

<noscript>
<p>&nbsp;</p>
<p>
If you can't see the emails of the committee members (you likely have javascript disabled) and need to contact us, use the general email address to do so.
</p>
</noscript>

---

# International Paper Committee

{% for member in page.ipc %}
- {{ member }}
{% endfor %}


---

# Steering Committee

The steering committee consists of the conference and general
co-chairs of the most recent 4 years, including the chairs of the
upcoming conference that is still being planned.

For 2024, this is:
{% for year in page.steering_committee -%}
<!-- {{ year.year }} -->
{%- for member in year.members %}
- {{ member }}
{% endfor -%}
{% endfor %}

In general, we expect that a junior and senior person will serve as
co-chairs for the conference and a similar team will serve as co-chairs
for the program.  This guideline allows junior members of the community
to gain exposure by participating in the conference organization.

The general chairs for each year's conference become the next year's
program chairs, unless they step down, in which case they can be replaced.
The following year's general chairs are selected and recruited by the current
chairs, with input and approval by the steering committee.

The steering committee is also responsible for making long-term strategic
decisions, such as those related to the publication format and timing.


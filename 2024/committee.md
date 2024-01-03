---
layout: default2024
title: 2024 Organizing Committee

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
        institution: Intel
        email: laurareznikov@gmail.com
        pronouns: (she/her)

  - chair: Papers Chairs
    members:
      - name: Erik Sintorn
        link: http://www.cse.chalmers.se/~d00sint/
        institution: Chalmers University of Technology, Sweden
        email: erik.sintorn@chalmers.se
        pronouns: (he, him)
      - name: Bart Wroński
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

  - chair: Publicity Chair
    members:
      - name: Roc R. Currius
        link: https://ror3d.xyz
        institution: Sony Interactive Entertainment
        email: akdm@ror3d.xyz
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
  - TBD

---

<small>*Co-chairs are listed alphabetically*</small>


{% for chair in page.committee %}

### {{ chair.chair }}
<ul class="unstyled expand">
  {% for member in chair.members -%}
  <li> 
		<b class="member-name">{% if member.link %}<a href="{{ member.link }}" target="_blank">{{ member.name }}</a>{% else %}{{ member.name }}{% endif %}</b><br>
		{% if member.institution %}{{ member.institution }}<br>{% endif %}
		{% if member.email %}{{ member.email }}<br>{% endif %}
		{{ member.pronouns }}
	</li>
  {%- endfor %}
</ul>
{% endfor %}

---

## International Paper Committee

{% for member in page.ipc %}
- {{ member }}
{% endfor %}


---

## Steering Committee

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


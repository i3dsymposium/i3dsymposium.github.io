---
layout: default2026
title: 2026 Committee

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
      - name: Zackary P. T. Sin
        link: https://zackarysin.github.io/
        institution: The Hong Kong Polytechnic University
        email: zackary-p-t.sin@polyu.edu.hk
        pronouns: (he, him)
  #    - name: 
  #      institution: 
  #      email: 
  #      pronouns: (she, her)

  - chair: Papers Chairs
    members:
      - name: Markus Billeter
        link: http://newq.net/
        institution: School of Computing, University of Leeds
        email: m.billeter@leeds.ac.uk
        pronouns: (he, him)
      - name: Benjamin Watson
        link: https://watson.csc.ncsu.edu/
        institution: Dept. of Computer Science, North Carolina State University
        email: bwatson@ncsu.edu
        pronouns: (he, him)

  #- chair: Posters Chair
  #  members:
  #    - name: Zackary P. T. Sin
  #      link: https://zackarysin.github.io/
  #      institution: The Hong Kong Polytechnic University
  #      email: zackary-p-t.sin@polyu.edu.hk
  #      pronouns: (he, him)

  - chair: Program Chair
    members:
      - name: Mauricio Vives
        link: https://twitter.com/pixnblox
        institution: Autodesk, Inc.
        email: mauricio.vives@autodesk.com
        pronouns: (he, him)

  - chair: Publicity Chair
    members:
      - name: Roc R. Currius
        link: https://ror3d.xyz
        institution: Sony Interactive Entertainment
        email: akdm@ror3d.xyz
        pronouns: (he, him)

steering_committee:
  - year: 2026
    members:
      - Zackary P. T. Sin
      - 
  - year: 2025
    members:
      - Markus Billeter
      - Benjamin Watson
  - year: 2024
    members:
      - Ricardo Marroquim
      - Laura Reznikov
  - year: 2023
    members:
      - Erik Sintorn
      - Bart Wroński

ipc:

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

{% if ipc.size > 0 %}
---

# International Paper Committee

{% for member in page.ipc %}
- {{ member }}
{%- endfor %}

{% endif %}

---

# Steering Committee

The steering committee consists of the conference and general
co-chairs of the most recent 4 years, including the chairs of the
upcoming conference that is still being planned.

For {% comment %}<!-- This doesn't work at the moment because jekyll is bugged. -->{{layout.current_year}}{% endcomment -%} 2025, this is:
{% for year in page.steering_committee -%}
<!-- {{ year.year }} -->
{%- for member in year.members %}
- {{ member }}
{%- endfor -%}
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


---
layout: default2024
title: sponsors

sponsors_definition:
  - level: Title of the level of sponsorship
    size: Width of the images that will be shown in this level
    members: # List of members
      - name: Name of the company (Only used in the "alt" of the img tag)
        image: Image to show for this sponsor
        link: url to link to for this sponsor

sponsors:
  - level: Platinum Sponsors
    size: 230
    members:

  - level: Gold Sponsors
    size: 170
    members:

  - level: Silver Sponsors
    size: 120
    members:

---

# Corporate Sponsors

The ACM SIGGRAPH Symposium on Interactive 3D Graphics and Games
2024 is a highly-visible, leading-edge conference for techniques that
combine 3D computer graphics with human interaction. I3D continues to
focus on the hottest research in 3D game technology, interactive
visualization and visual depiction, interactive modeling,
user-assisted techniques, and applications. As a corporate supporter
you participate in this exciting field and demonstrate leadership in
supporting the latest developments in computer graphics research.


If your organization would like to become a corporate sponsor of I3D 2024, please contact the conference chairs: [general@i3dsymposium.org](mailto:general@i3dsymposium.org)
    

{% for level in page.sponsors -%}

{% if level.members -%}

## {{ level.level }}
{% for sponsor in level.members -%}
<div style="margin: 0px 5px 25px 5px;">
  <a href="{{ sponsor.link }}">
    <img width="{{ level.size }}" src="img/sponsors/{{ sponsor.image }}" alt="{{ sponsor.name }}" style="padding: 2px; background: #fff;">
  </a>
</div>
{% endfor -%}

{% endif -%}

{% endfor -%}


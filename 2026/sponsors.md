---
layout: default2026
title: Sponsors

sponsors_definition:
  - level: ID of the level of sponsorship (for CSS, defines size, in i3d.scss)
    members: # List of members
      - name: Name of the company (Only used in the "alt" of the img tag)
        image: Image to show for this sponsor
        link: url to link to for this sponsor

sponsors:
#  - level: platinum
#    members:
#      - name: arm
#        image: arm.png
#        link: https://www.arm.com
#      - name: meta
#        image: meta.png
#        link: https://www.metacareers.com
#  - level: gold
#    members:
#      - name: Cygames
#        image: cygames.png
#        link: https://www.cygames.co.jp/en/
#      - name: Activision
#        image: activision.png
#        link: https://research.activision.com
#      - name: EA
#        image: ea-seed.png
#        link: https://www.ea.com/seed
#      - name: Futurewei
#        image: futurewei.png
#        link: https://www.futurewei.com/
#  - level: silver
#    members:
#      - name: NVIDIA
#        image: nvidia.png
#        link: https://www.nvidia.com/en-us/research/

---

The ACM SIGGRAPH Symposium on Interactive 3D Graphics and Games
2025 is a highly-visible, leading-edge conference for techniques that
combine 3D computer graphics with human interaction. I3D continues to
focus on the hottest research in 3D game technology, interactive
visualization and visual depiction, interactive modeling,
user-assisted techniques, and applications. As a corporate supporter
you participate in this exciting field and demonstrate leadership in
supporting the latest developments in computer graphics research.


If your organization would like to become a corporate sponsor of
I3D 2025, please contact the conference chairs: [general@i3dsymposium.org](mailto:general@i3dsymposium.org)

<div id="sponsors" class="flex centered">
    <div class="two-thirds">
      {% for level in page.sponsors -%}
        {% if level.members -%}
          {% unless forloop.first %}<hr>{% endunless %}
          <h3>{{ level.level | capitalize }} Sponsor{% if level.members.size > 1 %}s{% endif %}</h3>
          <ul class="sponsors-list sponsors-{{ level.level }}">
          {% for sponsor in level.members -%}
              <li>
                  <a href="{{ sponsor.link }}" target="_blank">
                      <img src="img/sponsors/{{ sponsor.image }}" alt="{{ sponsor.name }}">
                  </a>
              </li>
          {% endfor -%}
          </ul>
        {% endif -%}
      {% endfor -%}
    </div>
</div>


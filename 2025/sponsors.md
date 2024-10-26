---
layout: default2025
title: Sponsors

sponsors_definition:
  - level: ID of the level of sponsorship (for CSS, defines size, in i3d.scss)
    title: Title of the sponsor level
    single_column: Makes this set of entries single column instead of 3 columns if only one entry. Mainly intended for venue (and platinum if only one)
    members: # List of members
      - name: Name of the company (Only used in the "alt" of the img tag)
        image: Image to show for this sponsor
        link: url to link to for this sponsor

sponsors:
#  - level: venue
#    title: Venue Sponsor
#    members:
#      - name: Cesium
#        image: cesium.png
#        link: https://cesium.com
#  - level: platinum
#    title: Platinum Sponsors
#    members:
#      - name: The Forge
#        image: the_forge.png
#        link: https://theforge.dev
#      - name: arm
#        image: arm.png
#        link: https://www.arm.com
#      - name: ea
#        image: ea.png
#        link: https://seed.ea.com
#  - level: gold
#    title: Gold Sponsors
#    members:
#      - name: Activision
#        image: activision.png
#        link: https://www.activision.com
#      - name: Roblox
#        image: roblox.png
#        link: https://research.roblox.com
#  - level: silver
#    title: Silver Sponsor
#    members:
#      - name: NVIDIA
#        image: nvidia.png
#        link: https://research.nvidia.com

---

# Corporate Sponsors

The ACM SIGGRAPH Symposium on Interactive 3D Graphics and Games
2025 is a highly-visible, leading-edge conference for techniques that
combine 3D computer graphics with human interaction. I3D continues to
focus on the hottest research in 3D game technology, interactive
visualization and visual depiction, interactive modeling,
user-assisted techniques, and applications. As a corporate supporter
you participate in this exciting field and demonstrate leadership in
supporting the latest developments in computer graphics research.


If your organization would like to become a corporate sponsor of I3D 2024, please contact the conference chairs: [general@i3dsymposium.org](mailto:general@i3dsymposium.org)

<div id="sponsors" class="flex">
    <div class="two-thirds">
        {% for level in page.sponsors -%}
        {% if level.members -%}
        <hr>
        <h3>{{ level.title }}</h3>
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


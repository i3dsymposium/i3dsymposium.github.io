---
layout: default2024
title: Schedule
iana_timezone: "US/Eastern"
timezone: "UTC-4"
timezone_name: "EDT"

program_definition:
  - day: A date, in YYYY-MM-DD format
    video: Youtube url
    times: # These need to be sorted by time
      - time: "9:30" # time formatted as HH:MM, in quotes for the parser to not complain. This should be in 24-hour format, and it should convert automatically to am/pm for the people who use that, according to computer configuration.
        title: Title of the time slot
        link: Optional link to something, like papers.html#Papers1 for the first paper session
        chair: Optional name of the chair for this session
        registered_only: true/false, default false, specifies that the event is only for registered individuals. This was mainly used when the conference was online only, for poster presentations and social events
      - time: "17:00"
        endtime: true # Define this to true to set this time as the endtime of the day, it will not be shown in the list, it's because the title of each day includes a time interval, and to obtain that, the first and last times in the list of each day are used.

program:
  - day: 2024-05-08
    times:
      - time: "8:20"
        notes: Breakfast
      - time: "9:00"
        title: Opening Session
      - time: "9:15"
        title: "Keynote 1: Fabio Zinno & Harold Chaput, EA"
        link: "keynotes.html#ai-in-play"
      - time: "10:15"
        notes: break
      - time: "10:45"
        title: "Papers 1: Interaction and VR"
        link: "papers.html#interaction-and-vr"
      - time: "12:25"
        notes: "Lunch"
      - time: "13:25"
        title: "Papers 2: Light Transport and Storage"
        link: "papers.html#light-transport-and-storage"
      - time: "14:40"
        notes: break
      - time: "15:10"
        title: "Papers 3: Volumes and Fields"
        link: "papers.html#volumes-and-fields"
      - time: "18:00"
        notes: "Reception dinner at Cesium"
        link: "venue.html"
      - time: "16:25"
        endtime: true

  - day: 2024-05-09
    times:
      - time: "8:20"
        notes: Breakfast
      - time: "9:00"
        title: "Keynote 2: Sylvain Lefebvre, Inria"
        link: "keynotes.html#the-gates-of-graphics"
      - time: "10:00"
        notes: break
      - time: "10:30"
        title: "Papers 4: Points and Splats"
        link: "papers.html#points-and-splats"
      - time: "12:10"
        notes: Lunch
      - time: "13:10"
        title: "Cesium Industry Talk"
        link: "sponsored-talks.html#Cesium"
      - time: "13:30"
        title: "Posters Fast-Forward"
      - time: "13:45"
        title: "Posters Session"
        link: "posters.html"
      - time: "14:30"
        title: "Papers 5: Noise and Reconstruction"
        link: "papers.html#noise-and-reconstruction"
      - time: "19:00"
        notes: Banquet dinner
      - time: "16:10"
        endtime: true

  - day: 2024-05-10
    times:
      - time: "8:20"
        notes: Breakfast
      - time: "9:00"
        title: "Papers 6: Efficient Forward and Differentiable Rendering"
        link: "papers.html#efficient-forward-and-differentiable-rendering"
      - time: "10:15"
        title: "The Forge Industry Talk"
        link: "sponsored-talks.html#TheForgeInteractive"
      - time: "10:35"
        notes: break
      - time: "11:05"
        title: "Papers 7: Learning to Move"
        link: "papers.html#learning-to-move"
      - time: "11:55"
        title: "ARM Industry Talk"
        link: "sponsored-talks.html#Arm"
      - time: "12:15"
        notes: Lunch
      - time: "13:15"
        title: "Papers 8: Solvers and Simulation"
        link: "papers.html#solvers-and-simulation"
      - time: "14:30"
        notes: break
      - time: "15:00"
        title: Closing & Awards
      - time: "15:10"
        title: Town Hall
      - time: "16:30"
        endtime: true
---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


The conference will run from Wednesday, 8th of May to Friday, 10th of May 2024, in [Philadelphia, PA, USA](venue.html).

All times are United States Eastern Daylight Time ({{ page.timezone_name }}, or {{ page.timezone }}).

{% for day in page.program %}

## {{ day.day | date: "%A, %e %B %Y" }}{% if day.video %}&nbsp;[![YouTube stream for Day {{ forloop.index }}](../img/youtube-link-logo.png){width="40px" style="vertical-align: text-bottom;"}]({{ day.video }}){:target="_blank"}{% endif %}
{: #program-day-{{forloop.index0}}}

{% if day.times and day.times.size > 0 %}

### <span class="time" data-day="{{ day.day }}">{{ day.times.first.time }}</span> to <span class="time" data-day="{{ day.day }}">{{ day.times.last.time }}</span> {{ page.timezone_name }}

{% endif %}

<table class="program times">
    {% for slot in day.times %}
    {% unless slot.endtime %}
    <tr>
        <td class="time" data-day="{{ day.day }}" valign="top" {% if slot.cancelled %}style="text-decoration:line-through;"{% endif %}>{{ slot.time }}</td>
        <td class="item">
            {% if slot.cancelled %}CANCELLED:&nbsp;{% endif -%}
            {% if slot.title %}
              {% if slot.link %}<a href="{{ slot.link }}">{{ slot.title }}</a>&nbsp;{% else %}{{ slot.title }}&nbsp;{% endif -%}
            {% endif -%}
            {% if slot.registered_only %}- <a href="attend.html">registration required</a>&nbsp;{% endif -%}
            {% if slot.link and slot.notes %}{% unless slot.title %}<a href="{{ slot.link }}">{% endunless %}{% endif -%}
              {% if slot.notes %}<i>{{ slot.notes }}</i>{% endif -%}
            {% if slot.link and slot.notes %}{% unless slot.title %}</a>{% endunless %}{% endif -%}
            {% if slot.chair -%}
              <span class="session-chair">Session chair: {{ slot.chair }}</span>
            {% endif %}
        </td>
    </tr>
    {% endunless %}
    {% endfor %}
</table>
{% endfor %}



<script src="../script/luxon.min.js"></script>
<script>
var times = document.getElementsByClassName("time");
Array.from(times).forEach(te => {
  var s = te.attributes["data-day"].value + " " + te.textContent;
  var t = luxon.DateTime.fromFormat(s, "yyyy-MM-dd H:mm", {zone:"{{page.iana_timezone}}"});
  var lt = t.toLocal();
  var lts =  lt.toLocaleString({ weekday: 'short', month: 'short', day: 'numeric', hour: 'numeric', minute: '2-digit', timeZoneName: 'short' });
  // Set the caption text on hover to the local time
  te.setAttribute("data-local-time", lts);
  te.setAttribute("title", lts);

  // Use AM/PM where appropriate according to the computer locale
  ts = t.toLocaleString(luxon.DateTime.TIME_SIMPLE);
  te.textContent = ts.toUpperCase()
});
</script>

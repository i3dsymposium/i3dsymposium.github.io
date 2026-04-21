---
layout: default2026
title: Schedule
iana_timezone: "US/Pacific"
timezone: "UTC-7"
timezone_name: "PDT"

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
  - day: 2026-05-13
    times:
      - time: "8:00"
        notes: "Breakfast + Signup"
      - time: "9:00"
        title: "Welcome"
      - time: "9:15"
        title: "Papers 1: VR in Hard Places"
        link: "papers.html#vr-in-hard-places"
      - time: "11:00"
        notes: break
      - time: "11:15"
        title: "Posters Fast Forward"
      - time: "11:40"
        title: "Keynote"
        #link: "keynotes.html#blake-taylor"
      - time: "12:40"
        notes: "Lunch + Posters 1"
      - time: "14:10"
        title: "Papers 2: Making Characters Behave"
        link: "papers.html#making-characters-behave"
      - time: "15:30"
        notes: break
      - time: "15:45"
        title: "[Invited Talk] An Art University & Game Company Partnership for Co-Creation with AI"
      - time: "17:00"
        notes: Reception
      - time: "19:00"
        endtime: true
 
  - day: 2026-05-14
    times:
      - time: "8:00"
        notes: Breakfast
      - time: "9:00"
        title: "Intro"
      - time: "9:10"
        title: "Papers 3: Model Glow-Ups"
        link: "papers.html#model-glow-ups"
      - time: "10:50"
        notes: break
      - time: "11:00"
        title: "Invited Talk (TBA)"
      - time: "12:00"
        notes: "Lunch + Posters 2"
      - time: "13:30"
        title: "Papers 4: Shapes on Track"
        link: "papers.html#shapes-on-track"
      - time: "14:50"
        notes: break
      - time: "15:00"
        title: "Keynote"
        #link: "keynotes.html#kayvon-fatahalian"
      - time: "18:00"
        notes: Banquet
      - time: "21:00"
        endtime: true
 
  - day: 2026-05-15
    times:
      - time: "8:00"
        notes: Breakfast
      - time: "9:00"
        title: "Invited Talk (TBA)"
      - time: "10:00"
        notes: break
      - time: "10:10"
        title: "Papers 5: STIRRing Up the Splatmosphere"
        link: "papers.html#stirring-up-the-splatmosphere"
      - time: "11:30"
        notes: Lunch
      - time: "12:30"
        title: "Session 6: My Game is All-A-Stutter"
        link: "papers.html#my-game-is-all-a-stutter"
      - time: "13:50"
        notes: break
      - time: "14:00"
        title: "Forum (TBA)"
      - time: "14:50"
        title: "Closing & Awards"
      - time: "15:10"
        title: "Town Hall"
      - time: "15:40"
        endtime: true
---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

This program is not definitive. The times and slot order listed here might change.

The conference will run from Wednesday 13th of May to Friday 15th of May 2026, in [San Francisco, CA, USA](venue.html).

All times are United States Pacific Daylight Savings Time ({{ page.timezone_name }}, or {{ page.timezone }}).

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

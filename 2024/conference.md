---
layout: default2024
title: Past conferences

conferences:
  - year: 2023
    location: Bellevue, Washington, USA
    pacm_cgit: https://dl.acm.org/toc/pacmcgit/2023/6/1
    archive: https://kesen.realtimerendering.com/i3d2023Papers.htm
  - year: 2022
    location: Virtual conference
    pacm_cgit: https://dl.acm.org/toc/pacmcgit/2022/5/1
    archive: https://kesen.realtimerendering.com/i3d2022Papers.htm
  - year: 2021
    location: Virtual conference
    pacm_cgit: https://dl.acm.org/toc/pacmcgit/2021/4/1
    archive: http://kesen.realtimerendering.com/i3d2021Papers.htm
  - year: 2020
    location: Virtual conference
    pacm_cgit: https://dl.acm.org/toc/pacmcgit/2020/3/1
    acm_dl: https://dl.acm.org/doi/proceedings/10.1145/3384382
    archive: http://kesen.realtimerendering.com/i3d2020Papers.htm
  - year: 2019
    location: Montreal, Quebec, Canada
    pacm_cgit: https://dl.acm.org/citation.cfm?id=3339245
    acm_dl: https://dl.acm.org/citation.cfm?id=3306131
    archive: http://kesen.realtimerendering.com/i3d2019Papers.htm
  - year: 2018
    location: Montreal, Quebec, Canada
    acm_dl: https://dl.acm.org/citation.cfm?id=3190834
    archive: http://kesen.realtimerendering.com/i3d2018Papers.htm
  - year: 2017
    location: San Francisco, California
    papers: https://dl.acm.org/doi/proceedings/10.1145/3023368
    archive: http://kesen.realtimerendering.com/i3d2017Papers.htm
  - year: 2016
    location: Redmond, Washington
    papers: http://dl.acm.org/citation.cfm?id=2856400&picked=prox&CFID=810362838&CFTOKEN=36997472
    archive: http://kesen.realtimerendering.com/i3d2016Papers.htm
  - year: 2015
    location: San Francisco, California
    papers: http://dl.acm.org/citation.cfm?id=2699276&picked=prox&cfid=699263023&cftoken=25796259
    archive: http://kesen.realtimerendering.com/i3d2015Papers.htm
  - year: 2014
    location: San Francisco, California
    papers: http://dl.acm.org/citation.cfm?id=2556700&CFID=540231133&CFTOKEN=56421003
    archive: http://kesen.realtimerendering.com/i3d2014Papers.htm
  - year: 2013
    location: Orlando, Florida
    papers: http://dl.acm.org/citation.cfm?id=2448196&CFID=241418470&CFTOKEN=20101258
    archive: http://kesen.realtimerendering.com/i3d2013Papers.htm
  - year: 2012
    location: Costa Mesa, California
    papers: http://dl.acm.org/citation.cfm?id=2159616&CFID=144148937&CFTOKEN=57664365
    archive: http://kesen.realtimerendering.com/i3d2012Papers.htm
  - year: 2011
    location: San Francisco, California
    papers: http://portal.acm.org/citation.cfm?id=1944745&coll=DL&dl=ACM&CFID=27156665&CFTOKEN=53646062
    archive: http://kesen.realtimerendering.com/i3d2011Papers.htm
  - year: 2010
    location: Bethesda, Washington DC
    papers: https://dl.acm.org/doi/proceedings/10.1145/1730804
    archive: http://kesen.realtimerendering.com/i3d2010Papers.htm
  - year: 2009
    location: Boston, Massachusetts
    papers: http://portal.acm.org/toc.cfm?id=1507149
    archive: http://kesen.huang.googlepages.com/i3d2009Papers.htm
  - year: 2008
    location: Redwood City, California
    papers: https://dl.acm.org/doi/proceedings/10.1145/1342250
    archive: http://kesen.huang.googlepages.com/i3d2008Papers.htm
  - year: 2007
    location: Seattle, Washington
    papers: https://dl.acm.org/doi/proceedings/10.1145/1230100
    archive: http://kesen.huang.googlepages.com/i3d2007Papers.htm
  - year: 2006
    location: Redwood City, California
    papers: https://dl.acm.org/doi/proceedings/10.1145/1111411
    archive: http://kesen.huang.googlepages.com/i3d2006Papers.htm
  - year: 2005
    location: Washington, District of Columbia
    papers: http://portal.acm.org/toc.cfm?id=1053427
    archive: http://kesen.huang.googlepages.com/i3d2005Papers.htm
  - year: 2003
    location: Monterey, California
    papers: http://portal.acm.org/toc.cfm?id=641480
    archive: http://kesen.huang.googlepages.com/i3d2003Papers.htm
  - year: 2001
    location: Research Triangle Park, North Carolina
    papers: http://portal.acm.org/toc.cfm?id=364338
  - year: 1999
    location: Atlanta, Georgia
    papers: http://portal.acm.org/toc.cfm?id=300523
  - year: 1997
    location: Providence, Rhode Island
    papers: http://portal.acm.org/toc.cfm?id=253284
  - year: 1995
    location: Monterey, California
    website: false
    papers: http://portal.acm.org/toc.cfm?id=199404
  - year: 1992
    location: Cambridge, Massachusetts
    website: false
    papers: http://portal.acm.org/toc.cfm?id=147156
  - year: 1990
    location: Snowbird, Utah
    website: false
    papers: http://portal.acm.org/toc.cfm?id=91385
  - year: 1986
    location: Chapel Hill, North Carolina
    website: false
    papers: http://portal.acm.org/toc.cfm?id=319120

---

<ul class="unstyled">
  {% for conf in page.conferences -%}
  <li style="margin-bottom: 10px; line-height: 120%;">
    <strong>I3D {{ conf.year }}</strong> - {{ conf.location }}
    <small>
    {% if conf.website == nil or conf.website -%}
    [&nbsp;<a href="../{{conf.year}}/">website</a>&nbsp;]
    {% endif -%}
    {% if conf.papers -%}
    [&nbsp;<a href="{{ conf.papers }}" target="_blank">papers</a>&nbsp;]
    {% endif -%}
    {% if conf.pacm_cgit -%}
    [&nbsp;<a href="{{ conf.pacm_cgit }}" target="_blank">PACM CGIT journal papers in the ACM DL</a>&nbsp;]
    {% endif -%}
    {% if conf.acm_dl -%}
    [&nbsp;<a href="{{ conf.acm_dl }}" target="_blank">papers in the ACM Digital Library</a>&nbsp;]
    {% endif -%}
    {% if conf.archive -%}
    [&nbsp;<a href="{{ conf.archive }}" target="_blank">paper archive</a>&nbsp;]
    {% endif -%}
    </small>
  </li>
  {% endfor %}
</ul>


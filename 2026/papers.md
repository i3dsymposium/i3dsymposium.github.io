---
layout: default2026
title: Papers Program

temporary_session_order: false # This enables/disables the "Papers N" in the titles

sessions_definition:
  - title: "Title for the session"
    chair: ""
    video: "Link to video, at the opening timestamp"
    papers:
      - title: "Paper title"
        authors: "Authors, all separated by commas"
        journal: "optionally, the acronym of the journal, such as tvcg or jcgt"
        doi_link: "DOI link"
        preprint: "link to the preprint provided by authors"
        presentation: "direct link to the video presentation (with timestamp, if it's a short part of a long session)"
        thumbnail: "filename of the thumbnail, stored in the [year]/img/paper_thumbnails/ directory"
        abstract:  |
          some text here, can be multiline.
          If separated by a single line, it will be converted to <br>,
          
          otherwise it will be converted to separate <p> tags


sessions:
  - title: "VR in hard places"
    # chair: ""
    # video: ""
    papers:
      - title: "SafeForce: A Compliant Method for Perceptually Aligned Interaction with ETHD-Simulated Virtual Objects"
        authors: "Yuqi Zhou and Voicu Popescu"
        abstract: |
          To enhance learning and training, VR haptic devices mustprovide safe and physically accurate feedback that helpsusers build intuitions about force and motion. We presentSafeForce, a method for rendering force feedback bycapturing user input and reconfiguring a compliantmechanism in real time to align perceived with expectedforces. We implemented SafeForce in a groundedEncountered-Type Haptic Display (ETHD) and demonstrated itsversatility through three representative physics scenarios:pushing a stationary object, experiencing electrostaticrepulsion, and bouncing a moving object. A user study with29 participants showed that users adapted to newinteraction profiles within 2--3 trials, and that renderedforces remained within perceptual thresholds except in theheaviest and most dynamic conditions. These results suggestthat SafeForce enables rapid, perceptually aligned, andeducationally valuable interactions with moving virtualobjects.
      - title: "Optical Flow-Based Anticipatory Audio Cues for Cybersickness Mitigation in Passive Navigation VREnvironments"
        authors: "Yuxue Bao, Xin Wang, Elliott Wen and Burkhard Wünsche"
        abstract: |
          Virtual reality (VR) applications face a criticaltrade-off: while visual immersion is the core experience, itoften induces cybersickness (CS), leading to userattrition. Existing visual interventions (e.g.,field-of-viewrestriction) alleviate discomfort at the cost ofcompromising immersion. Auditory interventions have beenwidely applied in mitigating motion sickness (MS), such asthrough music interventions and synchronizedsound effects. Among all MS mitigation approaches,anticipatory audio cues have demonstrated effectivenessin vehicular MS contexts, reducing symptoms byapproximately 17%. However, questions remain regardingVR cybersickness (CS): Do anticipatory audio cues remaineffective in highly immersive virtual environments,where the dominance of visual interaction in VR may altercue perception compared to that in MS contexts?How can VR motion intensity information be encoded, giventhat such information is largely absent in currentmitigation strategies? How can anticipatory audio cues besystematically designed for CS mitigation throughexplicit mapping frameworks that link visual motionparameters to audio features?To address these gaps, this study establishes an opticalflow mapping framework that encodes motiondirection through stereo positioning and intensity throughtemporal patterns, delivering the results 2 secondsin advance. A within-subjects experiment (N = 24) wasconducted in VR roller coaster environments, in whichfour conditions were compared. Results demonstrated asignificant reduction in cybersickness across all audioconditions (direction-only: d = 0.862; intensity-only: d =0.670; combined: d = 1.497, p < .001), with combined cuesoutperforming single-dimension alternatives (p < .016). Allinterventions preserved visual immersion (M ≈ 4.0/5) andmaintained high usability metrics. This frameworkdemonstrates that non-visual predictive cues can addressthe immersion-comfort trade-off in VR applications.
      - title: "Investigating the Effects of Physical Space Memory on User Performance in Virtual Reality"
        authors: "Bing Ning and Mingtao Pei"
        abstract: |
          Virtual Reality offers highly immersive experiences, yetusers remain physically situated in real-world environmentswhose layouts often differ from the virtual spaces theyperceive. In these settings, users’ spatial memory of thephysical environment may interact with or even conflictwith the virtual scene, potentially influencing locomotion,task performance, and situational awareness. Despite itsimportance, the influence of physical space memory on VRinteraction remains largely unexplored.To bridge this gap, we conducted three controlled studiesthat varied the virtual scene and task structure to examinehow physical-space memory affects VR performance. In StudyI, participants interacted with virtual props placed atdifferent distances from real obstacles, returning to afixed start point after each trial to isolate the effect ofobstacle proximity on immediate strategies. Study II usedthe same setup but removed the resets, allowing us toobserve how memory reliance changes as task durationincreases. In Study III, we introduced virtual anchors withvarying degrees of alignment to physical landmarks,assessing how spatial similarity between the two spacesinfluences navigation and task efficiency.Our findings reveal that users subconsciously adapt theirnavigation and decision-making based on rememberedsurroundings, even when no visual cues are available. Theseinsights deepen our understanding of spatial cognition inimmersive VR and provide actionable guidelines fordesigning safer, more efficient, and cognitively consistentvirtual environments.
      - title: "CoVR: Bridging Heterogeneous Physical Spaces for Collaborative VR via Personalized Scene Layouts"
        authors: "Bing Ning and Mingtao Pei"
        abstract: |
          Collaborative tasks in Virtual Reality, such as jointlymanipulating objects, require tight multi-usersynchronization. However, users often operate inheterogeneous physical environments with varying roomsizes, furniture layouts, and obstacles. Enforcing asingle, globally consistent virtual scene across suchdiversity con- strains users’ natural movements,underutilizes available physical space, and ultimatelydegrades collaboration efficiency. We present CoVR, a novelframework that enables seamless multi-user collaboration inVR across heterogeneous physical spaces by prioritizinginteraction alignment over strict spatial alignment.Instead of requiring all users to share an identicalvirtual scene, CoVR provides each user with a personalizedvirtual scene layout while maintaining synchronized actionsand consistent collaborative outcomes. Technically, weformulate a multi-user coupled optimization problem thatjointly optimizes per-user layouts to maximize usable spaceand facilitate seamless task execution. A key challengearises from bi-directional dependencies: one user’soptimized layout determines feasible trajectories, which inturn constrain other users’ optimizations, and vice versa.To tackle this, CoVR introduces an iterative jointoptimization algorithm alternating between personalizedscene refinement and cross-user synchronization untilconvergence. We evaluate CoVR across typical collaborativetasks. Results show that CoVR significantly outperformsconventional scene alignment methods, leading to notableimprovements in spatial efficiency, task completion time,and user comfort. These findings underscore its potentialfor scalable, natural, and efficient multi-user VRcollaboration.


  - title: "Making characters behave"
    # chair: ""
    # video: ""
    papers:
      - title: "Pose-Based Facial Animation Retargeting"
        authors: "Hector Anadon Leon and Judith Bütepage"
        abstract: |
          Algorithms leveraging ReSTIR-style spatiotemporal reusehave recently proliferated, hugely increasing effectivesample count for light transport in real-time ray and pathtracers. Many papers have been published on noveltheoretical improvements, but algorithmic improvements andengineering insights toward optimal implementation havelargely been neglected. We demonstrate enhancements toReSTIR PT that make it 2–3x faster, decrease both visualand numerical error, and improve its robustness, making itcloser to production-ready. We halve the spatial reuse costby reciprocal neighbor selection, robustify shift mappingswith new footprint-based reconnection criteria, and reducespatiotemporal correlation with duplication maps. Wefurther improve both performance and quality by extensiveoptimization, unifying direct and global illumination intothe same reservoirs, and utilizing existing techniques forcolor noise and disocclusion noise reduction.
      - title: "Synthesizing High-Level Character Behaviors via Generative LLM-Informed Modeling"
        authors: "Andreas Panayiotou, Panayiotis Charalambous and IoannisKaramouzas"
        abstract: |
          3D Gaussian Splatting is a popular representation forradiance field reconstruction, distinguished by therendering speed of its rasterization-based renderer. While3D Gaussians can also be raytraced, this approach has sofar been slower, with 3D Gaussian Ray Tracing (3DGRT)taking nearly one order of magnitude longer to optimize. Toaddress this, we present GRay, a fast ray tracer for 3DGaussians designed to close this performance gap and match3DGS's speed.Our method leverages the algorithmic difference betweenboth approaches: unlike rasterization, ray tracingevaluates only Gaussians that are actually intersected by aray,leading to potentially logarithmic---rather thanlinear---scaling in the number of primitives.This property allows ray tracing to better exploit densescenes composed of numerous tiny Gaussians, a configurationwhich has largely been overlooked. Notably, we show thatdense initialization---which creates many smallprimitives---slows down rasterization, but instead\emph{speeds up} ray tracing. Designed to leverage thiseffect, GRay renders nearly $4{\times}$ faster andoptimizes nearly $10{\times}$ faster than 3DGRT whilemaintaining similar quality, and has competitive speed with3DGS albeit with somewhat lower quality. Code will bereleased upon publication.
      - title: "Human-Like Bots for Tactical Shooters Using Compute-Efficient Sensors"
        authors: "Niels Justesen, Maria Kaselimi, Sam Snodgrass, Miruna Vozaru, Matthew Schlegel, Jonas Wingren, Gabriella A. B. Barros, Tobias Mahlmann, Shyam Sudhakaran, Wesley Kerr, Albert Wang, Christoffer Holmgård, Georgios N. Yannakakis, Sebastian Risi, Julian Togelius"
        abstract: |
          Artificial intelligence (AI) has enabled agents to master complex video games, from first-person shooters, such as Counter-Strike, to real-time strategy games, such as StarCraft II, and racing games such as Gran Turismo. While these achievements are notable, applying these AI methods in commercial video game production remains challenging due to computational constraints. In commercial scenarios, the majority of computational resources are allocated to 3-D rendering, leaving limited capacity for AI methods, which often demand high computational power, particularly those relying on pixel-based sensors. Moreover, the gaming industry prioritizes creating human-like behavior in AI agents to enhance player experience, unlike academic models that focus on maximizing game performance. This article introduces a novel methodology for training neural networks via imitation learning to play a complex, commercial-standard, VALORANT-like 2v2 tactical shooter game, requiring only modest CPU hardware during inference. Our approach leverages an innovative, pixel-free perception architecture using a small set of ray-cast sensors, which capture essential spatial information efficiently. These sensors allow AI to perform competently without the computational overhead of traditional methods. Models are trained to mimic human behavior using supervised learning on human trajectory data, resulting in realistic and engaging AI agents. Human evaluation tests confirm that our AI agents provide human-like gameplay experiences while operating efficiently under computational constraints. This offers a significant advancement in AI model development for tactical shooter games and possibly other genres.


  - title: "Model glow-ups"
    # chair: ""
    # video: ""
    papers:
      - title: "PixelSync: Enhancing Texture Generation via ExplicitFeature Synchronization"
        authors: "Philipp Drescher, Edoardo A. Dominici, Giacomo Nazzaro,Konstantinos Vardis, Stefan Hauswiesner and MarkusSteinberger"
        abstract: |
          The generation of consistent multi-view images is essentialfor diffusion-based 3D texture synthesis, a key componentof modern 3D content pipelines. However, existing methodsremain weakly coupled across viewpoints, often exhibitinginconsistencies between views that result in artifacts suchas ghosting, misalignment, and texture distortions. Weintroduce PixelSync, a training-free mechanism thatexplicitly enforces multi-view consistency during thediffusion process. Our method operates in two stages.First, we compute visibility-aware pixel correspondencesbetween known views in a fast pre-computation step byutilizing geometric information obtained from a given 3Dmodel. Then, during the diffusion process, we enforceconsistency through two complementary algorithms: (i)attention synchronization, by modifying the attentionscores in the U-Net’s down- and mid-blocks, and (ii) latentsynchronization, by progressively aligning features ontheir corresponding shared pixels. PixelSync can beseamlessly integrated into pre-trained diffusion modelswithout retraining, offering a lightweight and effectivesolution. We demonstrate the effectiveness of our approachfor generative texture synthesis by plugging PixelSync intoestablished multi-view diffusion backbones, showcasingreduced cross-view artifacts and improved global coherenceacross standard quantitative and qualitative evaluations.
      - title: "PECS: Positional Encoding Coordinate System"
        authors: "Guillaume Perez, Janarbek Matai and Takahiro Harada"
        abstract: |
          Implicit neural representations (INRs) are increasinglybeing used as tools to map coordinates to signals,encompassing applications from neural fields to texturecompression, shape representations, and beyond.Most INR methods are based on using high-dimensionalprojections of the initial coordinates through encoderssuch as grid or positional encoding.Nevertheless, positional encoding is often insufficientand grids, as we show in this paper, require highresolution for being able to learn.In this paper, we demonstrate that positional encoding canbe used not only as a high-dimensional embeddingbut also decomposed as a series of meaningful points.We propose the Positional Encoding Coordinate System,where we treat the projection of the original coordinate ateach frequency as a point of interest.We describe the motion of each point with respect to thefrequencies and show that it follows a unique pattern.Finally, we use the unique motion of each point as a basisdecomposition for doing learned positional encoding usinggrids.We prove, using three competitive applications— imagerepresentation, texture compression, and signed distancefunction—that the proposed approach outperforms the current state ofthe art methods,and often requires 25\% less parameters for equivalentreconstruction error or rendering.
      - title: "Aesthetic3D: Incorporating Shape Aesthetic Measures into 3D Modeling Interfaces"
        authors: "Deng Yu, Jianing Guo, Hui Ye, Pengjie Ren, Hongbo Fu andManfred Lau"
        abstract: |
          3D Aesthetics is significant in digital design, shaping howusers experience real-time 3D content in games, VR, andproduct design. However, creating aesthetically pleasingshapes remains challenging due to diverse subjectivestandards and the lack of tools that supportaesthetics-driven editing. Users often rely on intuitionwithout explicit guidance on visual appeal, makingaesthetic refinement slow, inconsistent, and cognitivelydemanding, particularly in fast-paced, iterative workflows.To address this challenge, we conducted in-depth interviewswith design experts to identify challenges inaesthetics-oriented modeling workflows. Based on thefindings, we developed Aesthetic3D, a 3D modeling interfaceoffering real-time aesthetic scores learned from humanperceptual data. Furthermore, Aesthetic3D seamlesslyintegrates the learned aesthetic measure into intuitiveediting operations, enabling aesthetics-driven explorationand refinement of shape geometry. We evaluated Aesthetic3Dthrough an ablation study, an open-ended study, and twogeneralization evaluations. Comprehensive experiments showthat with Aesthetic3D, users can easily and effectivelyenhance the aesthetic appeal of 3D shapes.
      - title: "Intrinsic decomposition and editing of 3D Gaussian splats"
        authors: "Alexandre Lanvin, Jeffrey Hu, Simon Lucas, Adrien Bousseauand George Drettakis"
        abstract: |
          Intrinsic decomposition — which expresses image colors asthe product of diffuse albedo and shading, possiblyaugmented with view-dependent residuals — has a longhistory in image editing as it enables the modification ofobject colors and textures without altering lighting. Weextend intrinsic decomposition to radiance fieldsrepresented with Gaussian splatting by proposing solutionsto three key aspects of such decomposition. First, wedescribe how to model the intrinsic decomposition asindependent sets of Gaussian primitives, which allows eachset to adapt to the characteristics of the layer itrepresents. Second, we present an optimization procedureguided by data-driven predictions to disentangle multi-viewphotographs of a scene into the aforementioned intrinsicsets. Finally, we provide an editing workflow where usersmodify the texture of planar surfaces simply by modifyingthe albedo of that surface in one image. Capturing thisedit within the intrinsic radiance field allowsre-rendering of the edited scene with plausible lightingunder arbitrary viewpoints.


  - title: "Shapes on track"
    # chair: ""
    # video: ""
    papers:
      - title: "Canvas3D: Translating 2D Edits into Implicit NeuralInstance Field"
        authors: "Yuqin Lu, Yihua Dai, Yutao Jiang, Tianyi Xiang, Chuhua Xianand Shengfeng He"
        abstract: |
          We introduce Canvas3D, a novel framework for learning aneditable 3D instance field from sparse 2D observations. Ourapproach utilizes depth information from observed views towarp sparse inputs into previously unobserved viewpoints.Each missing view is warped from the two nearest observedviews in different directions, effectively fillingocclusion-caused gaps. These warped views significantlyenhance the learning of a geometrically precise 3D instancefield by leveraging multi-view consistency. Additionally,we propose an effective method for manipulating the learned3D instance field through 2D interactions in ageometrically coherent manner. This allows for object-levelmanipulation in 3D space by editing 2D instance maps fromarbitrary viewpoints. The instance field also serves as anintermediate representation for 3D-aware editable imagesynthesis. This bypasses the complexities of direct 3Dmanipulation by editing a robust instance field beforetranslating it into consistent images using off-the-shelfsemantic image synthesis models. Extensive experimentsdemonstrate that our method accurately reconstructs a 3Dinstance field from sparse 2D observations and enables2D-driven object-level manipulation of the field. We alsoexplore the potential of our method in 3D-awarecontrollable image synthesis, showcasing synthesis resultsguided by edited semantic maps.
      - title: "From Generation to Gameplay: Authoring Race Tracks With Repulsive Curves"
        authors: "Lasse Henrich; Falko Kötter"
        abstract: |
          Procedural content generation is a useful tool for content creation in computer games. We present a novel approach for generating closed, arcade-like race tracks. Our algorithm generates an initial shape by growing a curve inside a constrained space under self-repulsion, hence avoiding self-intersections while ensuring tight packing. This system is capable of generating a wide variety of closed race track shapes with deep customization options, like an isometric alignment of straight sections as developed here. Further, we devise algorithms for fitting the shape to a spline and introducing intersections, as well as fully generating a 3-D model with features like crossings and bridges. We extend this approach with an editor tool developed in the Unity Engine for easy access to controls and customization options, and conclude with an expressive range analysis of the generator's output.
      - title: "Unpaired 3D Point Cloud Shape Translation through Structure-aware Token Space and Gated Fusion Translator"
        authors: "Yu-Chiao Wu, I-Chen Lin, Tzu-Miao Yao and Po-Jui Lin"
        abstract: |
          This paper addresses the problem of unpaired shapetranslation on 3D point clouds. While prior methodstypically rely on global latent vectors or spatiallystructured grids, such representations often lack theflexibility to capture both semantic structures andfine-grained geometric details. To address this, we proposeoperating directly in a structured token space, wheretokens are pretrained through masked autoencoding. Unlikerigid spatial grids that impose fixed layouts, our tokensnaturally adapt to geometric variations while maintainingsemantic coherence. This structured yet flexible latentspace enables semantically meaningful and geometricallyprecise transformations. A transformer-based translator isproposed to manipulate these tokens. This gated dual-branchtranslator enables detail-preserving and topology-awareshape translation across categories. Experiments onchallenging tasks, such as chair-to-table transformations,demonstrate that our approach outperforms existing methodsin preserving both global structure and part-level details.

  - title: "STIRring up the splatmosphere"
    # chair: ""
    # video: ""
    papers:
      - title: "ReSTIR PT Enhanced: Algorithmic Advances for Faster and More Robust ReSTIR Path Tracing"
        authors: "Daqi Lin, Markus Kettunen and Chris Wyman"
        abstract: |
          High-quality facial animation retargeting is crucial indigital entertainment production, enabling the transfer ofanimations from a source rig to a target rig. To avoid theneed of manual transfer, automatic retargeting methods canbe employed. However, creating universal methods remainschallenging due to varying rig and topologies. We propose anovel retargeting method based on the idea that any facialexpression can be decomposed into a weighted sum of FacialAction Coding System (FACS) poses. Our method assumes thatthese decompositions transfer across rigs with minimal needof refinement.  We utilize a machine learning model  toextract FACS weights from source frames. This model istrained solely on source animation data, requiring notarget data or complex correspondence mappings. After arefinement step, these weights are then applied to thetarget rig’s FACS poses. Our technique supports seamlessanimation transfer across different rigs while allowing forartistic modifications by adjusting individual FACS poses.Our experiments demonstrate that this method produceshigh-quality retargeted animations and outperforms otherretargeting methods. We explore how different designchoices impact retargeting quality and showcase artisticcontrol of asymmetries. By simplifying the workflow forrigged heads, this flexible framework enhances productionefficiency while maintaining artistic control.
      - title: "GRay: Ray Tracing 3D Gaussians Near The Speed of Splats"
        authors: "Yohan Poirier-Ginter, Jean-François Lalonde and GeorgeDrettakis"
        abstract: |
          Over the past two decades, researchers have madesignificant steps in simulating agent-based human crowds,yet most efforts remain focused on low-level tasks such ascollision avoidance, path following, and flocking. As aresult, these approaches often struggle to capture thehigh-level behaviors that emerge from sustained agent-agentand agent-environment interactions over time. We introduceGenerative LLM-Informed Modeling for Characters (GLIMC), agenerative framework that produces crowd scenarioscapturing agent–agent and agent–environment interactions,shaping coherent high-level crowd plans. To avoid thelabor-intensive process of collecting and annotating realcrowd video data, we leverage Large Language Models (LLMs)to bootstrap synthetic datasets of crowd scenarios. Torepresent those scenarios, we propose a time-expanded graphstructure encoding actions, interactions, and spatialcontext. GLIMC employs a dual Variational Graph Autoencoder(VGAE) architecture that jointly learns connectivitypatterns and node features conditioned on textual andstructural signals, overcoming the limitations of directLLM generation to enable scalable, environment-awaremulti-agent crowd simulations. We demonstrate theeffectiveness of our framework on scenarios with diversebehaviors such as, a University Campus and a Train Station,showing that it generates heterogeneous crowds, coherentinteractions, and high-level decision-making patternsconsistent with the provided context.
      - title: "Improving Spatial Domain Repetition of Implicit Surfaces"
        authors: "Clément Magniez and Cédric Zanni"
        abstract: |
          Implicit surfaces offer distinct advantages overtraditional boundary representations, including infiniteresolution, low memory footprint, smooth geometry byconstruction, and support for non-destructive modeling. Inthis work, we introduce a method for localizing geometricdetail in a way that preserves the mathematical propertiesrequired for accurate and efficient rendering using spheretracing.Our contributions include novel procedural modelingtechniques that expand the range of repetition patternsachievable in implicit surfaces; an interpolation-basedapproach that maintains field correctness while remainingcomputationally efficient; and a cache-based accelerationstrategy that significantly improves the renderingperformance of domain-repeated implicit geometries.

  - title: "My game is all-a-stutter"
    # chair: ""
    # video: ""
    papers:
      - title: "Impact of Graphical Fidelity and Frame-Time Stutter in a First-Person Shooter Game"
        authors: "Samin Shahriar Tokey, Ben Boudaoud, Joohwan Kim, JosefSpjut, Peter Xenopoulos and Mark Claypool"
        abstract: |
          Frametime spikes and graphical fidelity both influence thefeel of first-person shooter (FPS) games, yet theircombined effects are not well understood. This paperexamines how graphics settings and frametime spikemagnitude interact with player performance and experience.We developed a custom FPS game with configurable textures,lighting, and visual effects, and induced frametime spikesof 0~ms, 225~ms, or 675~ms during play. Twenty-oneparticipants completed all combinations while providingperformance data and subjective ratings for visual qualityand smoothness. Results show that graphical fidelityprimarily affects perceived visual \emph{quality}, whileframetime spikes strongly reduce perceived\emph{smoothness}. Performance (i.e., score and accuracy)declines with larger spikes but remains largely unchangedacross graphics settings. These findings suggest that spikemagnitude, rather than graphical fidelity, is the dominantfactor shaping smoothness and performance, while playersstill notice and prefer higher-fidelity visuals.
      - title: " A Toolkit for Visual Game Content Exploration and Modification"
        authors: "Philipp Fleck; Michael Hochörtler; David Kastl; Georg Gotschier; Johanna Pirker; Dieter Schmalstieg"
        abstract: |
          We investigate the idea of a toolkit for visually exploring and modifying game content, addressing questions, such as how to identify relevant in-game data, how to make use of the data to create in-game visual representations, and what benefits these representations have. To that aim, we build a toolkit on top of the. NET platform employed by Unity in order to explore and add custom content without access to the game's source code. Our visual modifications use live objects in the game as data sources. The results appear as an integral part of the game world, which is generated with the original Unity rendering engine. This capability enables visual exploration for debugging, playtesting, modding, streaming, and data-driven analysis of games, as we demonstrate with several examples.
      - title: " Will GPT-4 Run DOOM?"
        authors: "Adrian de Wynter"
        abstract: |
          We show that GPT-4’s reasoning and planning capabilities extend to the 1993 first-person shooter Doom. This large language model (LLM) is able to run and play the game with only a few instructions, plus a textual description–generated by the model itself from screenshots–about the state of the game being observed. We find that GPT-4 can play the game to a passable degree: it is able to manipulate doors, combat enemies, and perform pathing. More complex prompting strategies involving multiple model calls provide better results. While further work is required to enable the LLM to play the game as well as its classical, reinforcement learning-based counterparts, we note that GPT-4 required no training, leaning instead on its own reasoning and observational capabilities. We hope our work pushes the boundaries on intelligent, LLM-based agents in video games. We conclude by discussing the ethical implications of our work.




---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

Over the past four decades, the ACM SIGGRAPH Symposium on Interactive 3D Graphics and Games has showcased exceptional progress from academic and industrial research covering all aspects of interactive computer graphics, particularly games.

This year, we continue a track record of excellence with 16 high-quality papers selected by the international paper committee for publication and presentation at the conference.

<!-- Conference papers have been published in <a href="https://dl.acm.org/toc/pacmcgit/2025/8/1" target="_blank">PACM CGIT</a>. -->
Conference papers are published in <a href="https://dl.acm.org/journal/pacmcgit" target="_blank">PACM CGIT</a>.

{% if page.temporary_session_order -%}
Sessions are not in the order they will be scheduled, check back later when the final program is published!
{% endif %}

#### Invited papers
The program also includes 4 papers originally published in the IEEE journal [Transactions on Games](https://transactions.games/){: target="_blank"}, which will be presented during the conference.


{% for session in page.sessions %}

{% if forloop.length > 1 -%}
  {% unless page.temporary_session_order -%}
# Papers {{ forloop.index }}: {{ session.title }}
  {% else %}
# {{ session.title }}
  {% endunless -%}
{: #{{ session.title | downcase | slugify: "latin" }} }
{%- else -%}
# {{ session.title }}
{%- endif %}

{% comment %}<!-- The various "-" in the following block are made so that the .unstyled class is always applied to the list, not to the button or the definition list that follows -->{% endcomment -%}
{% if session.chair -%}
- Session chair: {{ session.chair }}{% endif %}
{% assign presentations_video = session.video | strip -%}
{%- if presentations_video != empty -%}
- [Watch Video]({{ presentations_video }}){: .button target="_blank"}
{% endif -%}
{: .unstyled }


{: .papers-list }
{% for paper in session.papers %}
{%- comment %}<!-- This next tag is absolutely horrendous but it is the only thing that seems to work to handle newlines in a nice way. Basically, we convert markdown to html, and then we ensure after any newline there are two spaces, so that the dd will not be broken -->{% endcomment -%}
{%- if paper.abstract -%}{%- assign abstract = paper.abstract | strip | escape_once | markdownify | replace: "
", "
  " %}{% endif %}

{{ paper.title }}
{%- comment %}<!-- Authors of the paper, separated by comma, with an "and" between the last two -->{% endcomment %}
: {% assign authors = paper.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}

{%- comment %}<!-- Links and meta info for the paper: original journal, doi, preprint, video presentation -->{% endcomment %}
: {% assign journal = paper.journal | strip -%}
  {%- comment %}<!-- journal and "live presentation only" -->{% endcomment -%}
  {%- if journal != empty or paper.live_only -%}
  ({% if journal != empty %}invited {{ journal | upcase }} paper presentation{%if paper.live_only %}, {% endif %}{% endif -%}
  {%- if paper.live_only %}live presentation only{% endif %}) {% endif -%}

  {%- comment %}<!-- links, separated by commas -->{% endcomment -%}
  {%- assign link = paper.doi_link | strip -%}
  {%- assign preprint = paper.preprint | strip -%}
  {%- assign presentation = paper.presentation | strip -%}
  {%- if link != empty -%}
  <a href="{{ link }}">DOI link</a>{% if preprint != empty or presentation != empty %}, {% endif -%}
  {%- endif -%}
  {%- if preprint != empty -%}
  <a href="{{ preprint }}">preprint</a>{% if presentation != empty %}, {% endif -%}
  {%- endif -%}
  {%- if presentation != empty -%}
  <a href="{{ presentation }}">presentation</a>{%- endif %}

{%- comment %}<!-- Abstract and thumbnail -->{% endcomment %}

: {% if paper.abstract or paper.thumbnail != empty -%}
  <details>
  {%- if paper.abstract %}
  <summary>Abstract</summary>

  {{ abstract }}

  {%- endif -%}
  <!-- {%- if paper.thumbnail != empty %}
  <img src="img/paper_thumbnails/{{ paper.thumbnail }}" class="paper-thumbnail">
  {% endif -%} -->
  {%- assign thumb = paper.thumbnail | to_s | strip -%}
  {%- if thumb != "" -%}
  <img src="img/paper_thumbnails/{{ thumb }}" class="paper-thumbnail">
  {%- endif -%}
  </details>
  {%- endif %}
{% endfor %}

{% unless forloop.last %}
---
{% endunless %}

{% endfor %}


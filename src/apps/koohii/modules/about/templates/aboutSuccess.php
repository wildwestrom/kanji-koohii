<?php
  use_helper('Widgets');
  $sf_request->setParameter('_homeFooter', true);
?>
<div class="row">

  <div class="col-md-2">
    <?php echo image_tag('/images/1.0/nav/about_photo2.gif', ['style' => 'display:block;margin:0 0 1em; border-radius:100%;', 'size' => '140x140']) ?>
    <?php //echo ui_ibtn('&nbsp;&nbsp;Contact', '@contact', array('icon' => 'edit', 'style' => 'display:block')) ?>
  </div>

  <div class="col-md-8">

    <section>
      <h2>So what is a "koohii" anyway ?</h2>
      <p>
        "Koohii" is meant to be a fun and short domain name. Most learners of the Japanese language will probably read it as <samp class="cj-k">コーヒー</samp>, the Japanese word for "coffee". So you may read the
        web site's url as "kanji coffee" if you like :)
      </p>
    </section>

    <section>
      <h3>Acknowledgements</h3>

      <p>For icons we currently use <a href="http://fontawesome.io/">FontAwesome 4</a> (free version).</p>

      <p>For php, parts of Zend Framework (<a href="http://framework.zend.com/license">New BSD License</a>) and Symfony 1.4 (<a href="http://www.symfony-project.org/license">MIT License</a>).</p>

      <p>
        Frame numbers and keywords from <em>Remembering the Kanji</em> Copyright &copy; James W. Heisig and used with permission.
        Frame numbers and keywords from <em>Remembering Traditional Hanzi</em> and <em>Remembering Simplified Hanzi</em> Copyright James W. Heisig
        and Timothy W. Richardson; and used with permission.
      </p>

      <p>
        This website uses the <a href="http://www.edrdg.org/jmdict/edict_doc.html">JMDICT</a> and <a href="http://www.edrdg.org/kanjidic/kanjidic.html">KANJIDIC</a> files.
        These files are the property of the <a href="http://www.edrdg.org/">Electronic Dictionary Research and Development Group</a> at Monash University,
        and are used in conformance with the Group's <a href="http://www.csse.monash.edu.au/~jwb/edrdg/licence.html">licence</a>.
      </p>
    </section>

    <section>
      <h3 id="license">License for User-contributed Content</h3>
      <p>
        All user-contributed stories on our Study pages are licensed under <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons BY-NC-SA</a>
        with <a href="about/license">attribution requirements</a>.
      </p>
    </section>

    <section>
      <h3>And a big thank you to...</h3>

      <ul>

        <li>All who joined in during the beta and help me improve the website!</li>
        <li>John Henson for his support and ideas.</li>
        <li>Zig Zichterman for the <a href="http://www.ziggr.com/heisig/">Heisig Kanji Index</a>.</li>
        <li>John Vold for compiling a list of RTK3's keywords.</li>
      </ul>
    </section>

  </div>

</div>


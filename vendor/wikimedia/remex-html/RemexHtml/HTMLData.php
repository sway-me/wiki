<?php

/**
 * This data file is machine generated, see GenerateDataFiles.php
 */

namespace RemexHtml;

class HTMLData {
	public const NS_HTML = 'http://www.w3.org/1999/xhtml';
	public const NS_MATHML = 'http://www.w3.org/1998/Math/MathML';
	public const NS_SVG = 'http://www.w3.org/2000/svg';
	public const NS_XLINK = 'http://www.w3.org/1999/xlink';
	public const NS_XML = 'http://www.w3.org/XML/1998/namespace';
	public const NS_XMLNS = 'http://www.w3.org/2000/xmlns/';

	static public $special = array (
  'http://www.w3.org/1999/xhtml' => 
  array (
    'address' => true,
    'applet' => true,
    'area' => true,
    'article' => true,
    'aside' => true,
    'base' => true,
    'basefont' => true,
    'bgsound' => true,
    'blockquote' => true,
    'body' => true,
    'br' => true,
    'button' => true,
    'caption' => true,
    'center' => true,
    'col' => true,
    'colgroup' => true,
    'dd' => true,
    'details' => true,
    'dir' => true,
    'div' => true,
    'dl' => true,
    'dt' => true,
    'embed' => true,
    'fieldset' => true,
    'figcaption' => true,
    'figure' => true,
    'footer' => true,
    'form' => true,
    'frame' => true,
    'frameset' => true,
    'h1' => true,
    'h2' => true,
    'h3' => true,
    'h4' => true,
    'h5' => true,
    'h6' => true,
    'head' => true,
    'header' => true,
    'hr' => true,
    'html' => true,
    'iframe' => true,
    'img' => true,
    'input' => true,
    'li' => true,
    'link' => true,
    'listing' => true,
    'main' => true,
    'marquee' => true,
    'menu' => true,
    'menuitem' => true,
    'meta' => true,
    'nav' => true,
    'noembed' => true,
    'noframes' => true,
    'noscript' => true,
    'object' => true,
    'ol' => true,
    'p' => true,
    'param' => true,
    'plaintext' => true,
    'pre' => true,
    'script' => true,
    'section' => true,
    'select' => true,
    'source' => true,
    'style' => true,
    'summary' => true,
    'table' => true,
    'tbody' => true,
    'td' => true,
    'template' => true,
    'textarea' => true,
    'tfoot' => true,
    'th' => true,
    'thead' => true,
    'title' => true,
    'tr' => true,
    'track' => true,
    'ul' => true,
    'wbr' => true,
    'xmp' => true,
  ),
  'http://www.w3.org/1998/Math/MathML' => 
  array (
    'mi' => true,
    'mo' => true,
    'mn' => true,
    'ms' => true,
    'mtext' => true,
    'annotation-xml' => true,
  ),
  'http://www.w3.org/2000/svg' => 
  array (
    'foreignObject' => true,
    'desc' => true,
    'title' => true,
  ),
);
	static public $namedEntityRegex = '
		CounterClockwiseContourIntegral;|
		ClockwiseContourIntegral;|
		DoubleLongLeftRightArrow;|
		NotNestedGreaterGreater;|
		DiacriticalDoubleAcute;|
		NotSquareSupersetEqual;|
		CloseCurlyDoubleQuote;|
		DoubleContourIntegral;|
		FilledVerySmallSquare;|
		NegativeVeryThinSpace;|
		NotPrecedesSlantEqual;|
		NotRightTriangleEqual;|
		NotSucceedsSlantEqual;|
		CapitalDifferentialD;|
		DoubleLeftRightArrow;|
		DoubleLongRightArrow;|
		EmptyVerySmallSquare;|
		NestedGreaterGreater;|
		NotDoubleVerticalBar;|
		NotGreaterSlantEqual;|
		NotLeftTriangleEqual;|
		NotSquareSubsetEqual;|
		OpenCurlyDoubleQuote;|
		ReverseUpEquilibrium;|
		DoubleLongLeftArrow;|
		DownLeftRightVector;|
		LeftArrowRightArrow;|
		NegativeMediumSpace;|
		NotGreaterFullEqual;|
		NotRightTriangleBar;|
		RightArrowLeftArrow;|
		SquareSupersetEqual;|
		leftrightsquigarrow;|
		DownRightTeeVector;|
		DownRightVectorBar;|
		LongLeftRightArrow;|
		Longleftrightarrow;|
		NegativeThickSpace;|
		NotLeftTriangleBar;|
		PrecedesSlantEqual;|
		ReverseEquilibrium;|
		RightDoubleBracket;|
		RightDownTeeVector;|
		RightDownVectorBar;|
		RightTriangleEqual;|
		SquareIntersection;|
		SucceedsSlantEqual;|
		blacktriangleright;|
		longleftrightarrow;|
		DoubleUpDownArrow;|
		DoubleVerticalBar;|
		DownLeftTeeVector;|
		DownLeftVectorBar;|
		FilledSmallSquare;|
		GreaterSlantEqual;|
		LeftDoubleBracket;|
		LeftDownTeeVector;|
		LeftDownVectorBar;|
		LeftTriangleEqual;|
		NegativeThinSpace;|
		NotGreaterGreater;|
		NotLessSlantEqual;|
		NotNestedLessLess;|
		NotReverseElement;|
		NotSquareSuperset;|
		NotTildeFullEqual;|
		RightAngleBracket;|
		RightUpDownVector;|
		SquareSubsetEqual;|
		VerticalSeparator;|
		blacktriangledown;|
		blacktriangleleft;|
		leftrightharpoons;|
		rightleftharpoons;|
		twoheadrightarrow;|
		DiacriticalAcute;|
		DiacriticalGrave;|
		DiacriticalTilde;|
		DoubleRightArrow;|
		DownArrowUpArrow;|
		EmptySmallSquare;|
		GreaterEqualLess;|
		GreaterFullEqual;|
		LeftAngleBracket;|
		LeftUpDownVector;|
		LessEqualGreater;|
		NonBreakingSpace;|
		NotPrecedesEqual;|
		NotRightTriangle;|
		NotSucceedsEqual;|
		NotSucceedsTilde;|
		NotSupersetEqual;|
		RightTriangleBar;|
		RightUpTeeVector;|
		RightUpVectorBar;|
		UnderParenthesis;|
		UpArrowDownArrow;|
		circlearrowright;|
		downharpoonright;|
		ntrianglerighteq;|
		rightharpoondown;|
		rightrightarrows;|
		twoheadleftarrow;|
		vartriangleright;|
		CloseCurlyQuote;|
		ContourIntegral;|
		DoubleDownArrow;|
		DoubleLeftArrow;|
		DownRightVector;|
		LeftRightVector;|
		LeftTriangleBar;|
		LeftUpTeeVector;|
		LeftUpVectorBar;|
		LowerRightArrow;|
		NotGreaterEqual;|
		NotGreaterTilde;|
		NotHumpDownHump;|
		NotLeftTriangle;|
		NotSquareSubset;|
		OverParenthesis;|
		RightDownVector;|
		ShortRightArrow;|
		UpperRightArrow;|
		bigtriangledown;|
		circlearrowleft;|
		curvearrowright;|
		downharpoonleft;|
		leftharpoondown;|
		leftrightarrows;|
		nLeftrightarrow;|
		nleftrightarrow;|
		ntrianglelefteq;|
		rightleftarrows;|
		rightsquigarrow;|
		rightthreetimes;|
		straightepsilon;|
		trianglerighteq;|
		vartriangleleft;|
		DiacriticalDot;|
		DoubleRightTee;|
		DownLeftVector;|
		GreaterGreater;|
		HorizontalLine;|
		InvisibleComma;|
		InvisibleTimes;|
		LeftDownVector;|
		LeftRightArrow;|
		Leftrightarrow;|
		LessSlantEqual;|
		LongRightArrow;|
		Longrightarrow;|
		LowerLeftArrow;|
		NestedLessLess;|
		NotGreaterLess;|
		NotLessGreater;|
		NotSubsetEqual;|
		NotVerticalBar;|
		OpenCurlyQuote;|
		ReverseElement;|
		RightTeeVector;|
		RightVectorBar;|
		ShortDownArrow;|
		ShortLeftArrow;|
		SquareSuperset;|
		TildeFullEqual;|
		UpperLeftArrow;|
		ZeroWidthSpace;|
		curvearrowleft;|
		doublebarwedge;|
		downdownarrows;|
		hookrightarrow;|
		leftleftarrows;|
		leftrightarrow;|
		leftthreetimes;|
		longrightarrow;|
		looparrowright;|
		nshortparallel;|
		ntriangleright;|
		rightarrowtail;|
		rightharpoonup;|
		trianglelefteq;|
		upharpoonright;|
		ApplyFunction;|
		DifferentialD;|
		DoubleLeftTee;|
		DoubleUpArrow;|
		LeftTeeVector;|
		LeftVectorBar;|
		LessFullEqual;|
		LongLeftArrow;|
		Longleftarrow;|
		NotEqualTilde;|
		NotTildeEqual;|
		NotTildeTilde;|
		Poincareplane;|
		PrecedesEqual;|
		PrecedesTilde;|
		RightArrowBar;|
		RightTeeArrow;|
		RightTriangle;|
		RightUpVector;|
		SucceedsEqual;|
		SucceedsTilde;|
		SupersetEqual;|
		UpEquilibrium;|
		VerticalTilde;|
		VeryThinSpace;|
		bigtriangleup;|
		blacktriangle;|
		divideontimes;|
		fallingdotseq;|
		hookleftarrow;|
		leftarrowtail;|
		leftharpoonup;|
		longleftarrow;|
		looparrowleft;|
		measuredangle;|
		ntriangleleft;|
		shortparallel;|
		smallsetminus;|
		triangleright;|
		upharpoonleft;|
		varsubsetneqq;|
		varsupsetneqq;|
		DownArrowBar;|
		DownTeeArrow;|
		ExponentialE;|
		GreaterEqual;|
		GreaterTilde;|
		HilbertSpace;|
		HumpDownHump;|
		Intersection;|
		LeftArrowBar;|
		LeftTeeArrow;|
		LeftTriangle;|
		LeftUpVector;|
		NotCongruent;|
		NotHumpEqual;|
		NotLessEqual;|
		NotLessTilde;|
		Proportional;|
		RightCeiling;|
		RoundImplies;|
		ShortUpArrow;|
		SquareSubset;|
		UnderBracket;|
		VerticalLine;|
		blacklozenge;|
		exponentiale;|
		risingdotseq;|
		triangledown;|
		triangleleft;|
		varsubsetneq;|
		varsupsetneq;|
		CircleMinus;|
		CircleTimes;|
		Equilibrium;|
		GreaterLess;|
		LeftCeiling;|
		LessGreater;|
		MediumSpace;|
		NotLessLess;|
		NotPrecedes;|
		NotSucceeds;|
		NotSuperset;|
		OverBracket;|
		RightVector;|
		Rrightarrow;|
		RuleDelayed;|
		SmallCircle;|
		SquareUnion;|
		SubsetEqual;|
		UpDownArrow;|
		Updownarrow;|
		VerticalBar;|
		backepsilon;|
		blacksquare;|
		circledcirc;|
		circleddash;|
		curlyeqprec;|
		curlyeqsucc;|
		diamondsuit;|
		eqslantless;|
		expectation;|
		nRightarrow;|
		nrightarrow;|
		preccurlyeq;|
		precnapprox;|
		quaternions;|
		straightphi;|
		succcurlyeq;|
		succnapprox;|
		thickapprox;|
		updownarrow;|
		Bernoullis;|
		CirclePlus;|
		EqualTilde;|
		Fouriertrf;|
		ImaginaryI;|
		Laplacetrf;|
		LeftVector;|
		Lleftarrow;|
		NotElement;|
		NotGreater;|
		Proportion;|
		RightArrow;|
		RightFloor;|
		Rightarrow;|
		ThickSpace;|
		TildeEqual;|
		TildeTilde;|
		UnderBrace;|
		UpArrowBar;|
		UpTeeArrow;|
		circledast;|
		complement;|
		curlywedge;|
		eqslantgtr;|
		gtreqqless;|
		lessapprox;|
		lesseqqgtr;|
		lmoustache;|
		longmapsto;|
		mapstodown;|
		mapstoleft;|
		nLeftarrow;|
		nleftarrow;|
		nsubseteqq;|
		nsupseteqq;|
		precapprox;|
		rightarrow;|
		rmoustache;|
		sqsubseteq;|
		sqsupseteq;|
		subsetneqq;|
		succapprox;|
		supsetneqq;|
		upuparrows;|
		varepsilon;|
		varnothing;|
		Backslash;|
		CenterDot;|
		CircleDot;|
		Congruent;|
		Coproduct;|
		DoubleDot;|
		DownArrow;|
		DownBreve;|
		Downarrow;|
		HumpEqual;|
		LeftArrow;|
		LeftFloor;|
		Leftarrow;|
		LessTilde;|
		Mellintrf;|
		MinusPlus;|
		NotCupCap;|
		NotExists;|
		NotSubset;|
		OverBrace;|
		PlusMinus;|
		Therefore;|
		ThinSpace;|
		TripleDot;|
		UnionPlus;|
		backprime;|
		backsimeq;|
		bigotimes;|
		centerdot;|
		checkmark;|
		complexes;|
		dotsquare;|
		downarrow;|
		gtrapprox;|
		gtreqless;|
		gvertneqq;|
		heartsuit;|
		leftarrow;|
		lesseqgtr;|
		lvertneqq;|
		ngeqslant;|
		nleqslant;|
		nparallel;|
		nshortmid;|
		nsubseteq;|
		nsupseteq;|
		pitchfork;|
		rationals;|
		spadesuit;|
		subseteqq;|
		subsetneq;|
		supseteqq;|
		supsetneq;|
		therefore;|
		triangleq;|
		varpropto;|
		DDotrahd;|
		DotEqual;|
		Integral;|
		LessLess;|
		NotEqual;|
		NotTilde;|
		PartialD;|
		Precedes;|
		RightTee;|
		Succeeds;|
		SuchThat;|
		Superset;|
		Uarrocir;|
		UnderBar;|
		andslope;|
		angmsdaa;|
		angmsdab;|
		angmsdac;|
		angmsdad;|
		angmsdae;|
		angmsdaf;|
		angmsdag;|
		angmsdah;|
		angrtvbd;|
		approxeq;|
		awconint;|
		backcong;|
		barwedge;|
		bbrktbrk;|
		bigoplus;|
		bigsqcup;|
		biguplus;|
		bigwedge;|
		boxminus;|
		boxtimes;|
		bsolhsub;|
		capbrcup;|
		circledR;|
		circledS;|
		cirfnint;|
		clubsuit;|
		cupbrcap;|
		curlyvee;|
		cwconint;|
		doteqdot;|
		dotminus;|
		drbkarow;|
		dzigrarr;|
		elinters;|
		emptyset;|
		eqvparsl;|
		fpartint;|
		geqslant;|
		gesdotol;|
		gnapprox;|
		hksearow;|
		hkswarow;|
		imagline;|
		imagpart;|
		infintie;|
		integers;|
		intercal;|
		intlarhk;|
		laemptyv;|
		ldrushar;|
		leqslant;|
		lesdotor;|
		llcorner;|
		lnapprox;|
		lrcorner;|
		lurdshar;|
		mapstoup;|
		multimap;|
		naturals;|
		ncongdot;|
		notindot;|
		otimesas;|
		parallel;|
		plusacir;|
		pointint;|
		precneqq;|
		precnsim;|
		profalar;|
		profline;|
		profsurf;|
		raemptyv;|
		realpart;|
		rppolint;|
		rtriltri;|
		scpolint;|
		setminus;|
		shortmid;|
		smeparsl;|
		sqsubset;|
		sqsupset;|
		subseteq;|
		succneqq;|
		succnsim;|
		supseteq;|
		thetasym;|
		thicksim;|
		timesbar;|
		triangle;|
		triminus;|
		trpezium;|
		ulcorner;|
		urcorner;|
		varkappa;|
		varsigma;|
		vartheta;|
		Because;|
		Cayleys;|
		Cconint;|
		Cedilla;|
		Diamond;|
		DownTee;|
		Element;|
		Epsilon;|
		Implies;|
		LeftTee;|
		NewLine;|
		NoBreak;|
		NotLess;|
		Omicron;|
		OverBar;|
		Product;|
		UpArrow;|
		Uparrow;|
		Upsilon;|
		alefsym;|
		angrtvb;|
		angzarr;|
		asympeq;|
		backsim;|
		because;|
		bemptyv;|
		between;|
		bigcirc;|
		bigodot;|
		bigstar;|
		bnequiv;|
		boxplus;|
		ccupssm;|
		cemptyv;|
		cirscir;|
		coloneq;|
		congdot;|
		cudarrl;|
		cudarrr;|
		cularrp;|
		curarrm;|
		dbkarow;|
		ddagger;|
		ddotseq;|
		demptyv;|
		diamond;|
		digamma;|
		dotplus;|
		dwangle;|
		epsilon;|
		eqcolon;|
		equivDD;|
		gesdoto;|
		gtquest;|
		gtrless;|
		harrcir;|
		intprod;|
		isindot;|
		larrbfs;|
		larrsim;|
		lbrksld;|
		lbrkslu;|
		ldrdhar;|
		lesdoto;|
		lessdot;|
		lessgtr;|
		lesssim;|
		lotimes;|
		lozenge;|
		ltquest;|
		luruhar;|
		maltese;|
		minusdu;|
		napprox;|
		natural;|
		nearrow;|
		nexists;|
		notinva;|
		notinvb;|
		notinvc;|
		notniva;|
		notnivb;|
		notnivc;|
		npolint;|
		npreceq;|
		nsqsube;|
		nsqsupe;|
		nsubset;|
		nsucceq;|
		nsupset;|
		nvinfin;|
		nvltrie;|
		nvrtrie;|
		nwarrow;|
		olcross;|
		omicron;|
		orderof;|
		orslope;|
		pertenk;|
		planckh;|
		pluscir;|
		plussim;|
		plustwo;|
		precsim;|
		quatint;|
		questeq;|
		rarrbfs;|
		rarrsim;|
		rbrksld;|
		rbrkslu;|
		rdldhar;|
		realine;|
		rotimes;|
		ruluhar;|
		searrow;|
		simplus;|
		simrarr;|
		subedot;|
		submult;|
		subplus;|
		subrarr;|
		succsim;|
		supdsub;|
		supedot;|
		suphsol;|
		suphsub;|
		suplarr;|
		supmult;|
		supplus;|
		swarrow;|
		topfork;|
		triplus;|
		tritime;|
		uparrow;|
		upsilon;|
		uwangle;|
		vzigzag;|
		zigrarr;|
		Aacute;|
		Abreve;|
		Agrave;|
		Assign;|
		Atilde;|
		Barwed;|
		Bumpeq;|
		Cacute;|
		Ccaron;|
		Ccedil;|
		Colone;|
		Conint;|
		CupCap;|
		Dagger;|
		Dcaron;|
		DotDot;|
		Dstrok;|
		Eacute;|
		Ecaron;|
		Egrave;|
		Exists;|
		ForAll;|
		Gammad;|
		Gbreve;|
		Gcedil;|
		HARDcy;|
		Hstrok;|
		Iacute;|
		Igrave;|
		Itilde;|
		Jsercy;|
		Kcedil;|
		Lacute;|
		Lambda;|
		Lcaron;|
		Lcedil;|
		Lmidot;|
		Lstrok;|
		Nacute;|
		Ncaron;|
		Ncedil;|
		Ntilde;|
		Oacute;|
		Odblac;|
		Ograve;|
		Oslash;|
		Otilde;|
		Otimes;|
		Racute;|
		Rarrtl;|
		Rcaron;|
		Rcedil;|
		SHCHcy;|
		SOFTcy;|
		Sacute;|
		Scaron;|
		Scedil;|
		Square;|
		Subset;|
		Supset;|
		Tcaron;|
		Tcedil;|
		Tstrok;|
		Uacute;|
		Ubreve;|
		Udblac;|
		Ugrave;|
		Utilde;|
		Vdashl;|
		Verbar;|
		Vvdash;|
		Yacute;|
		Zacute;|
		Zcaron;|
		aacute;|
		abreve;|
		agrave;|
		andand;|
		angmsd;|
		angsph;|
		apacir;|
		approx;|
		atilde;|
		barvee;|
		barwed;|
		becaus;|
		bernou;|
		bigcap;|
		bigcup;|
		bigvee;|
		bkarow;|
		bottom;|
		bowtie;|
		boxbox;|
		bprime;|
		brvbar;|
		bullet;|
		bumpeq;|
		cacute;|
		capand;|
		capcap;|
		capcup;|
		capdot;|
		ccaron;|
		ccedil;|
		circeq;|
		cirmid;|
		colone;|
		commat;|
		compfn;|
		conint;|
		coprod;|
		copysr;|
		cularr;|
		cupcap;|
		cupcup;|
		cupdot;|
		curarr;|
		curren;|
		cylcty;|
		dagger;|
		daleth;|
		dcaron;|
		dfisht;|
		divide;|
		divonx;|
		dlcorn;|
		dlcrop;|
		dollar;|
		drcorn;|
		drcrop;|
		dstrok;|
		eacute;|
		easter;|
		ecaron;|
		ecolon;|
		egrave;|
		egsdot;|
		elsdot;|
		emptyv;|
		emsp13;|
		emsp14;|
		eparsl;|
		eqcirc;|
		equals;|
		equest;|
		female;|
		ffilig;|
		ffllig;|
		forall;|
		frac12;|
		frac13;|
		frac14;|
		frac15;|
		frac16;|
		frac18;|
		frac23;|
		frac25;|
		frac34;|
		frac35;|
		frac38;|
		frac45;|
		frac56;|
		frac58;|
		frac78;|
		gacute;|
		gammad;|
		gbreve;|
		gesdot;|
		gesles;|
		gtlPar;|
		gtrarr;|
		gtrdot;|
		gtrsim;|
		hairsp;|
		hamilt;|
		hardcy;|
		hearts;|
		hellip;|
		hercon;|
		homtht;|
		horbar;|
		hslash;|
		hstrok;|
		hybull;|
		hyphen;|
		iacute;|
		igrave;|
		iiiint;|
		iinfin;|
		incare;|
		inodot;|
		intcal;|
		iquest;|
		isinsv;|
		itilde;|
		jsercy;|
		kappav;|
		kcedil;|
		kgreen;|
		lAtail;|
		lacute;|
		lagran;|
		lambda;|
		langle;|
		larrfs;|
		larrhk;|
		larrlp;|
		larrpl;|
		larrtl;|
		latail;|
		lbrace;|
		lbrack;|
		lcaron;|
		lcedil;|
		ldquor;|
		lesdot;|
		lesges;|
		lfisht;|
		lfloor;|
		lharul;|
		llhard;|
		lmidot;|
		lmoust;|
		loplus;|
		lowast;|
		lowbar;|
		lparlt;|
		lrhard;|
		lsaquo;|
		lsquor;|
		lstrok;|
		lthree;|
		ltimes;|
		ltlarr;|
		ltrPar;|
		mapsto;|
		marker;|
		mcomma;|
		midast;|
		midcir;|
		middot;|
		minusb;|
		minusd;|
		mnplus;|
		models;|
		mstpos;|
		nVDash;|
		nVdash;|
		nacute;|
		nbumpe;|
		ncaron;|
		ncedil;|
		nearhk;|
		nequiv;|
		nesear;|
		nexist;|
		nltrie;|
		notinE;|
		nparsl;|
		nprcue;|
		nrarrc;|
		nrarrw;|
		nrtrie;|
		nsccue;|
		nsimeq;|
		ntilde;|
		numero;|
		nvDash;|
		nvHarr;|
		nvdash;|
		nvlArr;|
		nvrArr;|
		nwarhk;|
		nwnear;|
		oacute;|
		odblac;|
		odsold;|
		ograve;|
		ominus;|
		origof;|
		oslash;|
		otilde;|
		otimes;|
		parsim;|
		percnt;|
		period;|
		permil;|
		phmmat;|
		planck;|
		plankv;|
		plusdo;|
		plusdu;|
		plusmn;|
		preceq;|
		primes;|
		prnsim;|
		propto;|
		prurel;|
		puncsp;|
		qprime;|
		rAtail;|
		racute;|
		rangle;|
		rarrap;|
		rarrfs;|
		rarrhk;|
		rarrlp;|
		rarrpl;|
		rarrtl;|
		ratail;|
		rbrace;|
		rbrack;|
		rcaron;|
		rcedil;|
		rdquor;|
		rfisht;|
		rfloor;|
		rharul;|
		rmoust;|
		roplus;|
		rpargt;|
		rsaquo;|
		rsquor;|
		rthree;|
		rtimes;|
		sacute;|
		scaron;|
		scedil;|
		scnsim;|
		searhk;|
		seswar;|
		sfrown;|
		shchcy;|
		sigmaf;|
		sigmav;|
		simdot;|
		smashp;|
		softcy;|
		solbar;|
		spades;|
		sqcaps;|
		sqcups;|
		sqsube;|
		sqsupe;|
		square;|
		squarf;|
		ssetmn;|
		ssmile;|
		sstarf;|
		subdot;|
		subset;|
		subsim;|
		subsub;|
		subsup;|
		succeq;|
		supdot;|
		supset;|
		supsim;|
		supsub;|
		supsup;|
		swarhk;|
		swnwar;|
		target;|
		tcaron;|
		tcedil;|
		telrec;|
		there4;|
		thetav;|
		thinsp;|
		thksim;|
		timesb;|
		timesd;|
		topbot;|
		topcir;|
		tprime;|
		tridot;|
		tstrok;|
		uacute;|
		ubreve;|
		udblac;|
		ufisht;|
		ugrave;|
		ulcorn;|
		ulcrop;|
		urcorn;|
		urcrop;|
		utilde;|
		vangrt;|
		varphi;|
		varrho;|
		veebar;|
		vellip;|
		verbar;|
		vsubnE;|
		vsubne;|
		vsupnE;|
		vsupne;|
		wedbar;|
		wedgeq;|
		weierp;|
		wreath;|
		xoplus;|
		xotime;|
		xsqcup;|
		xuplus;|
		xwedge;|
		yacute;|
		zacute;|
		zcaron;|
		zeetrf;|
		AElig;|
		Aacute|
		Acirc;|
		Agrave|
		Alpha;|
		Amacr;|
		Aogon;|
		Aring;|
		Atilde|
		Breve;|
		Ccedil|
		Ccirc;|
		Colon;|
		Cross;|
		Dashv;|
		Delta;|
		Eacute|
		Ecirc;|
		Egrave|
		Emacr;|
		Eogon;|
		Equal;|
		Gamma;|
		Gcirc;|
		Hacek;|
		Hcirc;|
		IJlig;|
		Iacute|
		Icirc;|
		Igrave|
		Imacr;|
		Iogon;|
		Iukcy;|
		Jcirc;|
		Jukcy;|
		Kappa;|
		Ntilde|
		OElig;|
		Oacute|
		Ocirc;|
		Ograve|
		Omacr;|
		Omega;|
		Oslash|
		Otilde|
		Prime;|
		RBarr;|
		Scirc;|
		Sigma;|
		THORN;|
		TRADE;|
		TSHcy;|
		Theta;|
		Tilde;|
		Uacute|
		Ubrcy;|
		Ucirc;|
		Ugrave|
		Umacr;|
		Union;|
		Uogon;|
		UpTee;|
		Uring;|
		VDash;|
		Vdash;|
		Wcirc;|
		Wedge;|
		Yacute|
		Ycirc;|
		aacute|
		acirc;|
		acute;|
		aelig;|
		agrave|
		aleph;|
		alpha;|
		amacr;|
		amalg;|
		angle;|
		angrt;|
		angst;|
		aogon;|
		aring;|
		asymp;|
		atilde|
		awint;|
		bcong;|
		bdquo;|
		bepsi;|
		blank;|
		blk12;|
		blk14;|
		blk34;|
		block;|
		boxDL;|
		boxDR;|
		boxDl;|
		boxDr;|
		boxHD;|
		boxHU;|
		boxHd;|
		boxHu;|
		boxUL;|
		boxUR;|
		boxUl;|
		boxUr;|
		boxVH;|
		boxVL;|
		boxVR;|
		boxVh;|
		boxVl;|
		boxVr;|
		boxdL;|
		boxdR;|
		boxdl;|
		boxdr;|
		boxhD;|
		boxhU;|
		boxhd;|
		boxhu;|
		boxuL;|
		boxuR;|
		boxul;|
		boxur;|
		boxvH;|
		boxvL;|
		boxvR;|
		boxvh;|
		boxvl;|
		boxvr;|
		breve;|
		brvbar|
		bsemi;|
		bsime;|
		bsolb;|
		bumpE;|
		bumpe;|
		caret;|
		caron;|
		ccaps;|
		ccedil|
		ccirc;|
		ccups;|
		cedil;|
		check;|
		clubs;|
		colon;|
		comma;|
		crarr;|
		cross;|
		csube;|
		csupe;|
		ctdot;|
		cuepr;|
		cuesc;|
		cupor;|
		curren|
		cuvee;|
		cuwed;|
		cwint;|
		dashv;|
		dblac;|
		ddarr;|
		delta;|
		dharl;|
		dharr;|
		diams;|
		disin;|
		divide|
		doteq;|
		dtdot;|
		dtrif;|
		duarr;|
		duhar;|
		eDDot;|
		eacute|
		ecirc;|
		efDot;|
		egrave|
		emacr;|
		empty;|
		eogon;|
		eplus;|
		epsiv;|
		eqsim;|
		equiv;|
		erDot;|
		erarr;|
		esdot;|
		exist;|
		fflig;|
		filig;|
		fjlig;|
		fllig;|
		fltns;|
		forkv;|
		frac12|
		frac14|
		frac34|
		frasl;|
		frown;|
		gamma;|
		gcirc;|
		gescc;|
		gimel;|
		gneqq;|
		gnsim;|
		grave;|
		gsime;|
		gsiml;|
		gtcir;|
		gtdot;|
		harrw;|
		hcirc;|
		hoarr;|
		iacute|
		icirc;|
		iexcl;|
		igrave|
		iiint;|
		iiota;|
		ijlig;|
		imacr;|
		image;|
		imath;|
		imped;|
		infin;|
		iogon;|
		iprod;|
		iquest|
		isinE;|
		isins;|
		isinv;|
		iukcy;|
		jcirc;|
		jmath;|
		jukcy;|
		kappa;|
		lAarr;|
		lBarr;|
		langd;|
		laquo;|
		larrb;|
		lates;|
		lbarr;|
		lbbrk;|
		lbrke;|
		lceil;|
		ldquo;|
		lescc;|
		lhard;|
		lharu;|
		lhblk;|
		llarr;|
		lltri;|
		lneqq;|
		lnsim;|
		loang;|
		loarr;|
		lobrk;|
		lopar;|
		lrarr;|
		lrhar;|
		lrtri;|
		lsime;|
		lsimg;|
		lsquo;|
		ltcir;|
		ltdot;|
		ltrie;|
		ltrif;|
		mDDot;|
		mdash;|
		micro;|
		middot|
		minus;|
		mumap;|
		nabla;|
		napid;|
		napos;|
		natur;|
		nbump;|
		ncong;|
		ndash;|
		neArr;|
		nearr;|
		nedot;|
		nesim;|
		ngeqq;|
		ngsim;|
		nhArr;|
		nharr;|
		nhpar;|
		nlArr;|
		nlarr;|
		nleqq;|
		nless;|
		nlsim;|
		nltri;|
		notin;|
		notni;|
		npart;|
		nprec;|
		nrArr;|
		nrarr;|
		nrtri;|
		nsime;|
		nsmid;|
		nspar;|
		nsubE;|
		nsube;|
		nsucc;|
		nsupE;|
		nsupe;|
		ntilde|
		numsp;|
		nvsim;|
		nwArr;|
		nwarr;|
		oacute|
		ocirc;|
		odash;|
		oelig;|
		ofcir;|
		ograve|
		ohbar;|
		olarr;|
		olcir;|
		oline;|
		omacr;|
		omega;|
		operp;|
		oplus;|
		orarr;|
		order;|
		oslash|
		otilde|
		ovbar;|
		parsl;|
		phone;|
		plusb;|
		pluse;|
		plusmn|
		pound;|
		prcue;|
		prime;|
		prnap;|
		prsim;|
		quest;|
		rAarr;|
		rBarr;|
		radic;|
		rangd;|
		range;|
		raquo;|
		rarrb;|
		rarrc;|
		rarrw;|
		ratio;|
		rbarr;|
		rbbrk;|
		rbrke;|
		rceil;|
		rdquo;|
		reals;|
		rhard;|
		rharu;|
		rlarr;|
		rlhar;|
		rnmid;|
		roang;|
		roarr;|
		robrk;|
		ropar;|
		rrarr;|
		rsquo;|
		rtrie;|
		rtrif;|
		sbquo;|
		sccue;|
		scirc;|
		scnap;|
		scsim;|
		sdotb;|
		sdote;|
		seArr;|
		searr;|
		setmn;|
		sharp;|
		sigma;|
		simeq;|
		simgE;|
		simlE;|
		simne;|
		slarr;|
		smile;|
		smtes;|
		sqcap;|
		sqcup;|
		sqsub;|
		sqsup;|
		srarr;|
		starf;|
		strns;|
		subnE;|
		subne;|
		supnE;|
		supne;|
		swArr;|
		swarr;|
		szlig;|
		theta;|
		thkap;|
		thorn;|
		tilde;|
		times;|
		trade;|
		trisb;|
		tshcy;|
		twixt;|
		uacute|
		ubrcy;|
		ucirc;|
		udarr;|
		udhar;|
		ugrave|
		uharl;|
		uharr;|
		uhblk;|
		ultri;|
		umacr;|
		uogon;|
		uplus;|
		upsih;|
		uring;|
		urtri;|
		utdot;|
		utrif;|
		uuarr;|
		vBarv;|
		vDash;|
		varpi;|
		vdash;|
		veeeq;|
		vltri;|
		vnsub;|
		vnsup;|
		vprop;|
		vrtri;|
		wcirc;|
		wedge;|
		xcirc;|
		xdtri;|
		xhArr;|
		xharr;|
		xlArr;|
		xlarr;|
		xodot;|
		xrArr;|
		xrarr;|
		xutri;|
		yacute|
		ycirc;|
		AElig|
		Acirc|
		Aopf;|
		Aring|
		Ascr;|
		Auml;|
		Barv;|
		Beta;|
		Bopf;|
		Bscr;|
		CHcy;|
		COPY;|
		Cdot;|
		Copf;|
		Cscr;|
		DJcy;|
		DScy;|
		DZcy;|
		Darr;|
		Dopf;|
		Dscr;|
		Ecirc|
		Edot;|
		Eopf;|
		Escr;|
		Esim;|
		Euml;|
		Fopf;|
		Fscr;|
		GJcy;|
		Gdot;|
		Gopf;|
		Gscr;|
		Hopf;|
		Hscr;|
		IEcy;|
		IOcy;|
		Icirc|
		Idot;|
		Iopf;|
		Iota;|
		Iscr;|
		Iuml;|
		Jopf;|
		Jscr;|
		KHcy;|
		KJcy;|
		Kopf;|
		Kscr;|
		LJcy;|
		Lang;|
		Larr;|
		Lopf;|
		Lscr;|
		Mopf;|
		Mscr;|
		NJcy;|
		Nopf;|
		Nscr;|
		Ocirc|
		Oopf;|
		Oscr;|
		Ouml;|
		Popf;|
		Pscr;|
		QUOT;|
		Qopf;|
		Qscr;|
		Rang;|
		Rarr;|
		Ropf;|
		Rscr;|
		SHcy;|
		Sopf;|
		Sqrt;|
		Sscr;|
		Star;|
		THORN|
		TScy;|
		Topf;|
		Tscr;|
		Uarr;|
		Ucirc|
		Uopf;|
		Upsi;|
		Uscr;|
		Uuml;|
		Vbar;|
		Vert;|
		Vopf;|
		Vscr;|
		Wopf;|
		Wscr;|
		Xopf;|
		Xscr;|
		YAcy;|
		YIcy;|
		YUcy;|
		Yopf;|
		Yscr;|
		Yuml;|
		ZHcy;|
		Zdot;|
		Zeta;|
		Zopf;|
		Zscr;|
		acirc|
		acute|
		aelig|
		andd;|
		andv;|
		ange;|
		aopf;|
		apid;|
		apos;|
		aring|
		ascr;|
		auml;|
		bNot;|
		bbrk;|
		beta;|
		beth;|
		bnot;|
		bopf;|
		boxH;|
		boxV;|
		boxh;|
		boxv;|
		bscr;|
		bsim;|
		bsol;|
		bull;|
		bump;|
		caps;|
		cdot;|
		cedil|
		cent;|
		chcy;|
		cirE;|
		circ;|
		cire;|
		comp;|
		cong;|
		copf;|
		copy;|
		cscr;|
		csub;|
		csup;|
		cups;|
		dArr;|
		dHar;|
		darr;|
		dash;|
		diam;|
		djcy;|
		dopf;|
		dscr;|
		dscy;|
		dsol;|
		dtri;|
		dzcy;|
		eDot;|
		ecir;|
		ecirc|
		edot;|
		emsp;|
		ensp;|
		eopf;|
		epar;|
		epsi;|
		escr;|
		esim;|
		euml;|
		euro;|
		excl;|
		flat;|
		fnof;|
		fopf;|
		fork;|
		fscr;|
		gdot;|
		geqq;|
		gesl;|
		gjcy;|
		gnap;|
		gneq;|
		gopf;|
		gscr;|
		gsim;|
		gtcc;|
		gvnE;|
		hArr;|
		half;|
		harr;|
		hbar;|
		hopf;|
		hscr;|
		icirc|
		iecy;|
		iexcl|
		imof;|
		iocy;|
		iopf;|
		iota;|
		iscr;|
		isin;|
		iuml;|
		jopf;|
		jscr;|
		khcy;|
		kjcy;|
		kopf;|
		kscr;|
		lArr;|
		lHar;|
		lang;|
		laquo|
		larr;|
		late;|
		lcub;|
		ldca;|
		ldsh;|
		leqq;|
		lesg;|
		ljcy;|
		lnap;|
		lneq;|
		lopf;|
		lozf;|
		lpar;|
		lscr;|
		lsim;|
		lsqb;|
		ltcc;|
		ltri;|
		lvnE;|
		macr;|
		male;|
		malt;|
		micro|
		mlcp;|
		mldr;|
		mopf;|
		mscr;|
		nGtv;|
		nLtv;|
		nang;|
		napE;|
		nbsp;|
		ncap;|
		ncup;|
		ngeq;|
		nges;|
		ngtr;|
		nisd;|
		njcy;|
		nldr;|
		nleq;|
		nles;|
		nmid;|
		nopf;|
		npar;|
		npre;|
		nsce;|
		nscr;|
		nsim;|
		nsub;|
		nsup;|
		ntgl;|
		ntlg;|
		nvap;|
		nvge;|
		nvgt;|
		nvle;|
		nvlt;|
		oast;|
		ocir;|
		ocirc|
		odiv;|
		odot;|
		ogon;|
		oint;|
		omid;|
		oopf;|
		opar;|
		ordf;|
		ordm;|
		oror;|
		oscr;|
		osol;|
		ouml;|
		para;|
		part;|
		perp;|
		phiv;|
		plus;|
		popf;|
		pound|
		prap;|
		prec;|
		prnE;|
		prod;|
		prop;|
		pscr;|
		qint;|
		qopf;|
		qscr;|
		quot;|
		rArr;|
		rHar;|
		race;|
		rang;|
		raquo|
		rarr;|
		rcub;|
		rdca;|
		rdsh;|
		real;|
		rect;|
		rhov;|
		ring;|
		ropf;|
		rpar;|
		rscr;|
		rsqb;|
		rtri;|
		scap;|
		scnE;|
		sdot;|
		sect;|
		semi;|
		sext;|
		shcy;|
		sime;|
		simg;|
		siml;|
		smid;|
		smte;|
		solb;|
		sopf;|
		spar;|
		squf;|
		sscr;|
		star;|
		subE;|
		sube;|
		succ;|
		sung;|
		sup1;|
		sup2;|
		sup3;|
		supE;|
		supe;|
		szlig|
		tbrk;|
		tdot;|
		thorn|
		times|
		tint;|
		toea;|
		topf;|
		tosa;|
		trie;|
		tscr;|
		tscy;|
		uArr;|
		uHar;|
		uarr;|
		ucirc|
		uopf;|
		upsi;|
		uscr;|
		utri;|
		uuml;|
		vArr;|
		vBar;|
		varr;|
		vert;|
		vopf;|
		vscr;|
		wopf;|
		wscr;|
		xcap;|
		xcup;|
		xmap;|
		xnis;|
		xopf;|
		xscr;|
		xvee;|
		yacy;|
		yicy;|
		yopf;|
		yscr;|
		yucy;|
		yuml;|
		zdot;|
		zeta;|
		zhcy;|
		zopf;|
		zscr;|
		zwnj;|
		AMP;|
		Acy;|
		Afr;|
		And;|
		Auml|
		Bcy;|
		Bfr;|
		COPY|
		Cap;|
		Cfr;|
		Chi;|
		Cup;|
		Dcy;|
		Del;|
		Dfr;|
		Dot;|
		ENG;|
		ETH;|
		Ecy;|
		Efr;|
		Eta;|
		Euml|
		Fcy;|
		Ffr;|
		Gcy;|
		Gfr;|
		Hat;|
		Hfr;|
		Icy;|
		Ifr;|
		Int;|
		Iuml|
		Jcy;|
		Jfr;|
		Kcy;|
		Kfr;|
		Lcy;|
		Lfr;|
		Lsh;|
		Map;|
		Mcy;|
		Mfr;|
		Ncy;|
		Nfr;|
		Not;|
		Ocy;|
		Ofr;|
		Ouml|
		Pcy;|
		Pfr;|
		Phi;|
		Psi;|
		QUOT|
		Qfr;|
		REG;|
		Rcy;|
		Rfr;|
		Rho;|
		Rsh;|
		Scy;|
		Sfr;|
		Sub;|
		Sum;|
		Sup;|
		Tab;|
		Tau;|
		Tcy;|
		Tfr;|
		Ucy;|
		Ufr;|
		Uuml|
		Vcy;|
		Vee;|
		Vfr;|
		Wfr;|
		Xfr;|
		Ycy;|
		Yfr;|
		Zcy;|
		Zfr;|
		acE;|
		acd;|
		acy;|
		afr;|
		amp;|
		and;|
		ang;|
		apE;|
		ape;|
		ast;|
		auml|
		bcy;|
		bfr;|
		bne;|
		bot;|
		cap;|
		cent|
		cfr;|
		chi;|
		cir;|
		copy|
		cup;|
		dcy;|
		deg;|
		dfr;|
		die;|
		div;|
		dot;|
		ecy;|
		efr;|
		egs;|
		ell;|
		els;|
		eng;|
		eta;|
		eth;|
		euml|
		fcy;|
		ffr;|
		gEl;|
		gap;|
		gcy;|
		gel;|
		geq;|
		ges;|
		gfr;|
		ggg;|
		glE;|
		gla;|
		glj;|
		gnE;|
		gne;|
		hfr;|
		icy;|
		iff;|
		ifr;|
		int;|
		iuml|
		jcy;|
		jfr;|
		kcy;|
		kfr;|
		lEg;|
		lap;|
		lat;|
		lcy;|
		leg;|
		leq;|
		les;|
		lfr;|
		lgE;|
		lnE;|
		lne;|
		loz;|
		lrm;|
		lsh;|
		macr|
		map;|
		mcy;|
		mfr;|
		mho;|
		mid;|
		nGg;|
		nGt;|
		nLl;|
		nLt;|
		nap;|
		nbsp|
		ncy;|
		nfr;|
		ngE;|
		nge;|
		ngt;|
		nis;|
		niv;|
		nlE;|
		nle;|
		nlt;|
		not;|
		npr;|
		nsc;|
		num;|
		ocy;|
		ofr;|
		ogt;|
		ohm;|
		olt;|
		ord;|
		ordf|
		ordm|
		orv;|
		ouml|
		par;|
		para|
		pcy;|
		pfr;|
		phi;|
		piv;|
		prE;|
		pre;|
		psi;|
		qfr;|
		quot|
		rcy;|
		reg;|
		rfr;|
		rho;|
		rlm;|
		rsh;|
		scE;|
		sce;|
		scy;|
		sect|
		sfr;|
		shy;|
		sim;|
		smt;|
		sol;|
		squ;|
		sub;|
		sum;|
		sup1|
		sup2|
		sup3|
		sup;|
		tau;|
		tcy;|
		tfr;|
		top;|
		ucy;|
		ufr;|
		uml;|
		uuml|
		vcy;|
		vee;|
		vfr;|
		wfr;|
		xfr;|
		ycy;|
		yen;|
		yfr;|
		yuml|
		zcy;|
		zfr;|
		zwj;|
		AMP|
		DD;|
		ETH|
		GT;|
		Gg;|
		Gt;|
		Im;|
		LT;|
		Ll;|
		Lt;|
		Mu;|
		Nu;|
		Or;|
		Pi;|
		Pr;|
		REG|
		Re;|
		Sc;|
		Xi;|
		ac;|
		af;|
		amp|
		ap;|
		dd;|
		deg|
		ee;|
		eg;|
		el;|
		eth|
		gE;|
		ge;|
		gg;|
		gl;|
		gt;|
		ic;|
		ii;|
		in;|
		it;|
		lE;|
		le;|
		lg;|
		ll;|
		lt;|
		mp;|
		mu;|
		ne;|
		ni;|
		not|
		nu;|
		oS;|
		or;|
		pi;|
		pm;|
		pr;|
		reg|
		rx;|
		sc;|
		shy|
		uml|
		wp;|
		wr;|
		xi;|
		yen|
		GT|
		LT|
		gt|
		lt';
	static public $charRefRegex = '~
				( .*? )                      # 1. prefix
				&
				(?:
					\\# (?:
						0*(\\d+)           |  # 2. decimal
						[xX]0*([0-9A-Fa-f]+) # 3. hexadecimal
					)
					( ; ) ?                  # 4. semicolon
					|
					( \\# )                   # 5. bare hash
					|
					(
		CounterClockwiseContourIntegral;|
		ClockwiseContourIntegral;|
		DoubleLongLeftRightArrow;|
		NotNestedGreaterGreater;|
		DiacriticalDoubleAcute;|
		NotSquareSupersetEqual;|
		CloseCurlyDoubleQuote;|
		DoubleContourIntegral;|
		FilledVerySmallSquare;|
		NegativeVeryThinSpace;|
		NotPrecedesSlantEqual;|
		NotRightTriangleEqual;|
		NotSucceedsSlantEqual;|
		CapitalDifferentialD;|
		DoubleLeftRightArrow;|
		DoubleLongRightArrow;|
		EmptyVerySmallSquare;|
		NestedGreaterGreater;|
		NotDoubleVerticalBar;|
		NotGreaterSlantEqual;|
		NotLeftTriangleEqual;|
		NotSquareSubsetEqual;|
		OpenCurlyDoubleQuote;|
		ReverseUpEquilibrium;|
		DoubleLongLeftArrow;|
		DownLeftRightVector;|
		LeftArrowRightArrow;|
		NegativeMediumSpace;|
		NotGreaterFullEqual;|
		NotRightTriangleBar;|
		RightArrowLeftArrow;|
		SquareSupersetEqual;|
		leftrightsquigarrow;|
		DownRightTeeVector;|
		DownRightVectorBar;|
		LongLeftRightArrow;|
		Longleftrightarrow;|
		NegativeThickSpace;|
		NotLeftTriangleBar;|
		PrecedesSlantEqual;|
		ReverseEquilibrium;|
		RightDoubleBracket;|
		RightDownTeeVector;|
		RightDownVectorBar;|
		RightTriangleEqual;|
		SquareIntersection;|
		SucceedsSlantEqual;|
		blacktriangleright;|
		longleftrightarrow;|
		DoubleUpDownArrow;|
		DoubleVerticalBar;|
		DownLeftTeeVector;|
		DownLeftVectorBar;|
		FilledSmallSquare;|
		GreaterSlantEqual;|
		LeftDoubleBracket;|
		LeftDownTeeVector;|
		LeftDownVectorBar;|
		LeftTriangleEqual;|
		NegativeThinSpace;|
		NotGreaterGreater;|
		NotLessSlantEqual;|
		NotNestedLessLess;|
		NotReverseElement;|
		NotSquareSuperset;|
		NotTildeFullEqual;|
		RightAngleBracket;|
		RightUpDownVector;|
		SquareSubsetEqual;|
		VerticalSeparator;|
		blacktriangledown;|
		blacktriangleleft;|
		leftrightharpoons;|
		rightleftharpoons;|
		twoheadrightarrow;|
		DiacriticalAcute;|
		DiacriticalGrave;|
		DiacriticalTilde;|
		DoubleRightArrow;|
		DownArrowUpArrow;|
		EmptySmallSquare;|
		GreaterEqualLess;|
		GreaterFullEqual;|
		LeftAngleBracket;|
		LeftUpDownVector;|
		LessEqualGreater;|
		NonBreakingSpace;|
		NotPrecedesEqual;|
		NotRightTriangle;|
		NotSucceedsEqual;|
		NotSucceedsTilde;|
		NotSupersetEqual;|
		RightTriangleBar;|
		RightUpTeeVector;|
		RightUpVectorBar;|
		UnderParenthesis;|
		UpArrowDownArrow;|
		circlearrowright;|
		downharpoonright;|
		ntrianglerighteq;|
		rightharpoondown;|
		rightrightarrows;|
		twoheadleftarrow;|
		vartriangleright;|
		CloseCurlyQuote;|
		ContourIntegral;|
		DoubleDownArrow;|
		DoubleLeftArrow;|
		DownRightVector;|
		LeftRightVector;|
		LeftTriangleBar;|
		LeftUpTeeVector;|
		LeftUpVectorBar;|
		LowerRightArrow;|
		NotGreaterEqual;|
		NotGreaterTilde;|
		NotHumpDownHump;|
		NotLeftTriangle;|
		NotSquareSubset;|
		OverParenthesis;|
		RightDownVector;|
		ShortRightArrow;|
		UpperRightArrow;|
		bigtriangledown;|
		circlearrowleft;|
		curvearrowright;|
		downharpoonleft;|
		leftharpoondown;|
		leftrightarrows;|
		nLeftrightarrow;|
		nleftrightarrow;|
		ntrianglelefteq;|
		rightleftarrows;|
		rightsquigarrow;|
		rightthreetimes;|
		straightepsilon;|
		trianglerighteq;|
		vartriangleleft;|
		DiacriticalDot;|
		DoubleRightTee;|
		DownLeftVector;|
		GreaterGreater;|
		HorizontalLine;|
		InvisibleComma;|
		InvisibleTimes;|
		LeftDownVector;|
		LeftRightArrow;|
		Leftrightarrow;|
		LessSlantEqual;|
		LongRightArrow;|
		Longrightarrow;|
		LowerLeftArrow;|
		NestedLessLess;|
		NotGreaterLess;|
		NotLessGreater;|
		NotSubsetEqual;|
		NotVerticalBar;|
		OpenCurlyQuote;|
		ReverseElement;|
		RightTeeVector;|
		RightVectorBar;|
		ShortDownArrow;|
		ShortLeftArrow;|
		SquareSuperset;|
		TildeFullEqual;|
		UpperLeftArrow;|
		ZeroWidthSpace;|
		curvearrowleft;|
		doublebarwedge;|
		downdownarrows;|
		hookrightarrow;|
		leftleftarrows;|
		leftrightarrow;|
		leftthreetimes;|
		longrightarrow;|
		looparrowright;|
		nshortparallel;|
		ntriangleright;|
		rightarrowtail;|
		rightharpoonup;|
		trianglelefteq;|
		upharpoonright;|
		ApplyFunction;|
		DifferentialD;|
		DoubleLeftTee;|
		DoubleUpArrow;|
		LeftTeeVector;|
		LeftVectorBar;|
		LessFullEqual;|
		LongLeftArrow;|
		Longleftarrow;|
		NotEqualTilde;|
		NotTildeEqual;|
		NotTildeTilde;|
		Poincareplane;|
		PrecedesEqual;|
		PrecedesTilde;|
		RightArrowBar;|
		RightTeeArrow;|
		RightTriangle;|
		RightUpVector;|
		SucceedsEqual;|
		SucceedsTilde;|
		SupersetEqual;|
		UpEquilibrium;|
		VerticalTilde;|
		VeryThinSpace;|
		bigtriangleup;|
		blacktriangle;|
		divideontimes;|
		fallingdotseq;|
		hookleftarrow;|
		leftarrowtail;|
		leftharpoonup;|
		longleftarrow;|
		looparrowleft;|
		measuredangle;|
		ntriangleleft;|
		shortparallel;|
		smallsetminus;|
		triangleright;|
		upharpoonleft;|
		varsubsetneqq;|
		varsupsetneqq;|
		DownArrowBar;|
		DownTeeArrow;|
		ExponentialE;|
		GreaterEqual;|
		GreaterTilde;|
		HilbertSpace;|
		HumpDownHump;|
		Intersection;|
		LeftArrowBar;|
		LeftTeeArrow;|
		LeftTriangle;|
		LeftUpVector;|
		NotCongruent;|
		NotHumpEqual;|
		NotLessEqual;|
		NotLessTilde;|
		Proportional;|
		RightCeiling;|
		RoundImplies;|
		ShortUpArrow;|
		SquareSubset;|
		UnderBracket;|
		VerticalLine;|
		blacklozenge;|
		exponentiale;|
		risingdotseq;|
		triangledown;|
		triangleleft;|
		varsubsetneq;|
		varsupsetneq;|
		CircleMinus;|
		CircleTimes;|
		Equilibrium;|
		GreaterLess;|
		LeftCeiling;|
		LessGreater;|
		MediumSpace;|
		NotLessLess;|
		NotPrecedes;|
		NotSucceeds;|
		NotSuperset;|
		OverBracket;|
		RightVector;|
		Rrightarrow;|
		RuleDelayed;|
		SmallCircle;|
		SquareUnion;|
		SubsetEqual;|
		UpDownArrow;|
		Updownarrow;|
		VerticalBar;|
		backepsilon;|
		blacksquare;|
		circledcirc;|
		circleddash;|
		curlyeqprec;|
		curlyeqsucc;|
		diamondsuit;|
		eqslantless;|
		expectation;|
		nRightarrow;|
		nrightarrow;|
		preccurlyeq;|
		precnapprox;|
		quaternions;|
		straightphi;|
		succcurlyeq;|
		succnapprox;|
		thickapprox;|
		updownarrow;|
		Bernoullis;|
		CirclePlus;|
		EqualTilde;|
		Fouriertrf;|
		ImaginaryI;|
		Laplacetrf;|
		LeftVector;|
		Lleftarrow;|
		NotElement;|
		NotGreater;|
		Proportion;|
		RightArrow;|
		RightFloor;|
		Rightarrow;|
		ThickSpace;|
		TildeEqual;|
		TildeTilde;|
		UnderBrace;|
		UpArrowBar;|
		UpTeeArrow;|
		circledast;|
		complement;|
		curlywedge;|
		eqslantgtr;|
		gtreqqless;|
		lessapprox;|
		lesseqqgtr;|
		lmoustache;|
		longmapsto;|
		mapstodown;|
		mapstoleft;|
		nLeftarrow;|
		nleftarrow;|
		nsubseteqq;|
		nsupseteqq;|
		precapprox;|
		rightarrow;|
		rmoustache;|
		sqsubseteq;|
		sqsupseteq;|
		subsetneqq;|
		succapprox;|
		supsetneqq;|
		upuparrows;|
		varepsilon;|
		varnothing;|
		Backslash;|
		CenterDot;|
		CircleDot;|
		Congruent;|
		Coproduct;|
		DoubleDot;|
		DownArrow;|
		DownBreve;|
		Downarrow;|
		HumpEqual;|
		LeftArrow;|
		LeftFloor;|
		Leftarrow;|
		LessTilde;|
		Mellintrf;|
		MinusPlus;|
		NotCupCap;|
		NotExists;|
		NotSubset;|
		OverBrace;|
		PlusMinus;|
		Therefore;|
		ThinSpace;|
		TripleDot;|
		UnionPlus;|
		backprime;|
		backsimeq;|
		bigotimes;|
		centerdot;|
		checkmark;|
		complexes;|
		dotsquare;|
		downarrow;|
		gtrapprox;|
		gtreqless;|
		gvertneqq;|
		heartsuit;|
		leftarrow;|
		lesseqgtr;|
		lvertneqq;|
		ngeqslant;|
		nleqslant;|
		nparallel;|
		nshortmid;|
		nsubseteq;|
		nsupseteq;|
		pitchfork;|
		rationals;|
		spadesuit;|
		subseteqq;|
		subsetneq;|
		supseteqq;|
		supsetneq;|
		therefore;|
		triangleq;|
		varpropto;|
		DDotrahd;|
		DotEqual;|
		Integral;|
		LessLess;|
		NotEqual;|
		NotTilde;|
		PartialD;|
		Precedes;|
		RightTee;|
		Succeeds;|
		SuchThat;|
		Superset;|
		Uarrocir;|
		UnderBar;|
		andslope;|
		angmsdaa;|
		angmsdab;|
		angmsdac;|
		angmsdad;|
		angmsdae;|
		angmsdaf;|
		angmsdag;|
		angmsdah;|
		angrtvbd;|
		approxeq;|
		awconint;|
		backcong;|
		barwedge;|
		bbrktbrk;|
		bigoplus;|
		bigsqcup;|
		biguplus;|
		bigwedge;|
		boxminus;|
		boxtimes;|
		bsolhsub;|
		capbrcup;|
		circledR;|
		circledS;|
		cirfnint;|
		clubsuit;|
		cupbrcap;|
		curlyvee;|
		cwconint;|
		doteqdot;|
		dotminus;|
		drbkarow;|
		dzigrarr;|
		elinters;|
		emptyset;|
		eqvparsl;|
		fpartint;|
		geqslant;|
		gesdotol;|
		gnapprox;|
		hksearow;|
		hkswarow;|
		imagline;|
		imagpart;|
		infintie;|
		integers;|
		intercal;|
		intlarhk;|
		laemptyv;|
		ldrushar;|
		leqslant;|
		lesdotor;|
		llcorner;|
		lnapprox;|
		lrcorner;|
		lurdshar;|
		mapstoup;|
		multimap;|
		naturals;|
		ncongdot;|
		notindot;|
		otimesas;|
		parallel;|
		plusacir;|
		pointint;|
		precneqq;|
		precnsim;|
		profalar;|
		profline;|
		profsurf;|
		raemptyv;|
		realpart;|
		rppolint;|
		rtriltri;|
		scpolint;|
		setminus;|
		shortmid;|
		smeparsl;|
		sqsubset;|
		sqsupset;|
		subseteq;|
		succneqq;|
		succnsim;|
		supseteq;|
		thetasym;|
		thicksim;|
		timesbar;|
		triangle;|
		triminus;|
		trpezium;|
		ulcorner;|
		urcorner;|
		varkappa;|
		varsigma;|
		vartheta;|
		Because;|
		Cayleys;|
		Cconint;|
		Cedilla;|
		Diamond;|
		DownTee;|
		Element;|
		Epsilon;|
		Implies;|
		LeftTee;|
		NewLine;|
		NoBreak;|
		NotLess;|
		Omicron;|
		OverBar;|
		Product;|
		UpArrow;|
		Uparrow;|
		Upsilon;|
		alefsym;|
		angrtvb;|
		angzarr;|
		asympeq;|
		backsim;|
		because;|
		bemptyv;|
		between;|
		bigcirc;|
		bigodot;|
		bigstar;|
		bnequiv;|
		boxplus;|
		ccupssm;|
		cemptyv;|
		cirscir;|
		coloneq;|
		congdot;|
		cudarrl;|
		cudarrr;|
		cularrp;|
		curarrm;|
		dbkarow;|
		ddagger;|
		ddotseq;|
		demptyv;|
		diamond;|
		digamma;|
		dotplus;|
		dwangle;|
		epsilon;|
		eqcolon;|
		equivDD;|
		gesdoto;|
		gtquest;|
		gtrless;|
		harrcir;|
		intprod;|
		isindot;|
		larrbfs;|
		larrsim;|
		lbrksld;|
		lbrkslu;|
		ldrdhar;|
		lesdoto;|
		lessdot;|
		lessgtr;|
		lesssim;|
		lotimes;|
		lozenge;|
		ltquest;|
		luruhar;|
		maltese;|
		minusdu;|
		napprox;|
		natural;|
		nearrow;|
		nexists;|
		notinva;|
		notinvb;|
		notinvc;|
		notniva;|
		notnivb;|
		notnivc;|
		npolint;|
		npreceq;|
		nsqsube;|
		nsqsupe;|
		nsubset;|
		nsucceq;|
		nsupset;|
		nvinfin;|
		nvltrie;|
		nvrtrie;|
		nwarrow;|
		olcross;|
		omicron;|
		orderof;|
		orslope;|
		pertenk;|
		planckh;|
		pluscir;|
		plussim;|
		plustwo;|
		precsim;|
		quatint;|
		questeq;|
		rarrbfs;|
		rarrsim;|
		rbrksld;|
		rbrkslu;|
		rdldhar;|
		realine;|
		rotimes;|
		ruluhar;|
		searrow;|
		simplus;|
		simrarr;|
		subedot;|
		submult;|
		subplus;|
		subrarr;|
		succsim;|
		supdsub;|
		supedot;|
		suphsol;|
		suphsub;|
		suplarr;|
		supmult;|
		supplus;|
		swarrow;|
		topfork;|
		triplus;|
		tritime;|
		uparrow;|
		upsilon;|
		uwangle;|
		vzigzag;|
		zigrarr;|
		Aacute;|
		Abreve;|
		Agrave;|
		Assign;|
		Atilde;|
		Barwed;|
		Bumpeq;|
		Cacute;|
		Ccaron;|
		Ccedil;|
		Colone;|
		Conint;|
		CupCap;|
		Dagger;|
		Dcaron;|
		DotDot;|
		Dstrok;|
		Eacute;|
		Ecaron;|
		Egrave;|
		Exists;|
		ForAll;|
		Gammad;|
		Gbreve;|
		Gcedil;|
		HARDcy;|
		Hstrok;|
		Iacute;|
		Igrave;|
		Itilde;|
		Jsercy;|
		Kcedil;|
		Lacute;|
		Lambda;|
		Lcaron;|
		Lcedil;|
		Lmidot;|
		Lstrok;|
		Nacute;|
		Ncaron;|
		Ncedil;|
		Ntilde;|
		Oacute;|
		Odblac;|
		Ograve;|
		Oslash;|
		Otilde;|
		Otimes;|
		Racute;|
		Rarrtl;|
		Rcaron;|
		Rcedil;|
		SHCHcy;|
		SOFTcy;|
		Sacute;|
		Scaron;|
		Scedil;|
		Square;|
		Subset;|
		Supset;|
		Tcaron;|
		Tcedil;|
		Tstrok;|
		Uacute;|
		Ubreve;|
		Udblac;|
		Ugrave;|
		Utilde;|
		Vdashl;|
		Verbar;|
		Vvdash;|
		Yacute;|
		Zacute;|
		Zcaron;|
		aacute;|
		abreve;|
		agrave;|
		andand;|
		angmsd;|
		angsph;|
		apacir;|
		approx;|
		atilde;|
		barvee;|
		barwed;|
		becaus;|
		bernou;|
		bigcap;|
		bigcup;|
		bigvee;|
		bkarow;|
		bottom;|
		bowtie;|
		boxbox;|
		bprime;|
		brvbar;|
		bullet;|
		bumpeq;|
		cacute;|
		capand;|
		capcap;|
		capcup;|
		capdot;|
		ccaron;|
		ccedil;|
		circeq;|
		cirmid;|
		colone;|
		commat;|
		compfn;|
		conint;|
		coprod;|
		copysr;|
		cularr;|
		cupcap;|
		cupcup;|
		cupdot;|
		curarr;|
		curren;|
		cylcty;|
		dagger;|
		daleth;|
		dcaron;|
		dfisht;|
		divide;|
		divonx;|
		dlcorn;|
		dlcrop;|
		dollar;|
		drcorn;|
		drcrop;|
		dstrok;|
		eacute;|
		easter;|
		ecaron;|
		ecolon;|
		egrave;|
		egsdot;|
		elsdot;|
		emptyv;|
		emsp13;|
		emsp14;|
		eparsl;|
		eqcirc;|
		equals;|
		equest;|
		female;|
		ffilig;|
		ffllig;|
		forall;|
		frac12;|
		frac13;|
		frac14;|
		frac15;|
		frac16;|
		frac18;|
		frac23;|
		frac25;|
		frac34;|
		frac35;|
		frac38;|
		frac45;|
		frac56;|
		frac58;|
		frac78;|
		gacute;|
		gammad;|
		gbreve;|
		gesdot;|
		gesles;|
		gtlPar;|
		gtrarr;|
		gtrdot;|
		gtrsim;|
		hairsp;|
		hamilt;|
		hardcy;|
		hearts;|
		hellip;|
		hercon;|
		homtht;|
		horbar;|
		hslash;|
		hstrok;|
		hybull;|
		hyphen;|
		iacute;|
		igrave;|
		iiiint;|
		iinfin;|
		incare;|
		inodot;|
		intcal;|
		iquest;|
		isinsv;|
		itilde;|
		jsercy;|
		kappav;|
		kcedil;|
		kgreen;|
		lAtail;|
		lacute;|
		lagran;|
		lambda;|
		langle;|
		larrfs;|
		larrhk;|
		larrlp;|
		larrpl;|
		larrtl;|
		latail;|
		lbrace;|
		lbrack;|
		lcaron;|
		lcedil;|
		ldquor;|
		lesdot;|
		lesges;|
		lfisht;|
		lfloor;|
		lharul;|
		llhard;|
		lmidot;|
		lmoust;|
		loplus;|
		lowast;|
		lowbar;|
		lparlt;|
		lrhard;|
		lsaquo;|
		lsquor;|
		lstrok;|
		lthree;|
		ltimes;|
		ltlarr;|
		ltrPar;|
		mapsto;|
		marker;|
		mcomma;|
		midast;|
		midcir;|
		middot;|
		minusb;|
		minusd;|
		mnplus;|
		models;|
		mstpos;|
		nVDash;|
		nVdash;|
		nacute;|
		nbumpe;|
		ncaron;|
		ncedil;|
		nearhk;|
		nequiv;|
		nesear;|
		nexist;|
		nltrie;|
		notinE;|
		nparsl;|
		nprcue;|
		nrarrc;|
		nrarrw;|
		nrtrie;|
		nsccue;|
		nsimeq;|
		ntilde;|
		numero;|
		nvDash;|
		nvHarr;|
		nvdash;|
		nvlArr;|
		nvrArr;|
		nwarhk;|
		nwnear;|
		oacute;|
		odblac;|
		odsold;|
		ograve;|
		ominus;|
		origof;|
		oslash;|
		otilde;|
		otimes;|
		parsim;|
		percnt;|
		period;|
		permil;|
		phmmat;|
		planck;|
		plankv;|
		plusdo;|
		plusdu;|
		plusmn;|
		preceq;|
		primes;|
		prnsim;|
		propto;|
		prurel;|
		puncsp;|
		qprime;|
		rAtail;|
		racute;|
		rangle;|
		rarrap;|
		rarrfs;|
		rarrhk;|
		rarrlp;|
		rarrpl;|
		rarrtl;|
		ratail;|
		rbrace;|
		rbrack;|
		rcaron;|
		rcedil;|
		rdquor;|
		rfisht;|
		rfloor;|
		rharul;|
		rmoust;|
		roplus;|
		rpargt;|
		rsaquo;|
		rsquor;|
		rthree;|
		rtimes;|
		sacute;|
		scaron;|
		scedil;|
		scnsim;|
		searhk;|
		seswar;|
		sfrown;|
		shchcy;|
		sigmaf;|
		sigmav;|
		simdot;|
		smashp;|
		softcy;|
		solbar;|
		spades;|
		sqcaps;|
		sqcups;|
		sqsube;|
		sqsupe;|
		square;|
		squarf;|
		ssetmn;|
		ssmile;|
		sstarf;|
		subdot;|
		subset;|
		subsim;|
		subsub;|
		subsup;|
		succeq;|
		supdot;|
		supset;|
		supsim;|
		supsub;|
		supsup;|
		swarhk;|
		swnwar;|
		target;|
		tcaron;|
		tcedil;|
		telrec;|
		there4;|
		thetav;|
		thinsp;|
		thksim;|
		timesb;|
		timesd;|
		topbot;|
		topcir;|
		tprime;|
		tridot;|
		tstrok;|
		uacute;|
		ubreve;|
		udblac;|
		ufisht;|
		ugrave;|
		ulcorn;|
		ulcrop;|
		urcorn;|
		urcrop;|
		utilde;|
		vangrt;|
		varphi;|
		varrho;|
		veebar;|
		vellip;|
		verbar;|
		vsubnE;|
		vsubne;|
		vsupnE;|
		vsupne;|
		wedbar;|
		wedgeq;|
		weierp;|
		wreath;|
		xoplus;|
		xotime;|
		xsqcup;|
		xuplus;|
		xwedge;|
		yacute;|
		zacute;|
		zcaron;|
		zeetrf;|
		AElig;|
		Aacute|
		Acirc;|
		Agrave|
		Alpha;|
		Amacr;|
		Aogon;|
		Aring;|
		Atilde|
		Breve;|
		Ccedil|
		Ccirc;|
		Colon;|
		Cross;|
		Dashv;|
		Delta;|
		Eacute|
		Ecirc;|
		Egrave|
		Emacr;|
		Eogon;|
		Equal;|
		Gamma;|
		Gcirc;|
		Hacek;|
		Hcirc;|
		IJlig;|
		Iacute|
		Icirc;|
		Igrave|
		Imacr;|
		Iogon;|
		Iukcy;|
		Jcirc;|
		Jukcy;|
		Kappa;|
		Ntilde|
		OElig;|
		Oacute|
		Ocirc;|
		Ograve|
		Omacr;|
		Omega;|
		Oslash|
		Otilde|
		Prime;|
		RBarr;|
		Scirc;|
		Sigma;|
		THORN;|
		TRADE;|
		TSHcy;|
		Theta;|
		Tilde;|
		Uacute|
		Ubrcy;|
		Ucirc;|
		Ugrave|
		Umacr;|
		Union;|
		Uogon;|
		UpTee;|
		Uring;|
		VDash;|
		Vdash;|
		Wcirc;|
		Wedge;|
		Yacute|
		Ycirc;|
		aacute|
		acirc;|
		acute;|
		aelig;|
		agrave|
		aleph;|
		alpha;|
		amacr;|
		amalg;|
		angle;|
		angrt;|
		angst;|
		aogon;|
		aring;|
		asymp;|
		atilde|
		awint;|
		bcong;|
		bdquo;|
		bepsi;|
		blank;|
		blk12;|
		blk14;|
		blk34;|
		block;|
		boxDL;|
		boxDR;|
		boxDl;|
		boxDr;|
		boxHD;|
		boxHU;|
		boxHd;|
		boxHu;|
		boxUL;|
		boxUR;|
		boxUl;|
		boxUr;|
		boxVH;|
		boxVL;|
		boxVR;|
		boxVh;|
		boxVl;|
		boxVr;|
		boxdL;|
		boxdR;|
		boxdl;|
		boxdr;|
		boxhD;|
		boxhU;|
		boxhd;|
		boxhu;|
		boxuL;|
		boxuR;|
		boxul;|
		boxur;|
		boxvH;|
		boxvL;|
		boxvR;|
		boxvh;|
		boxvl;|
		boxvr;|
		breve;|
		brvbar|
		bsemi;|
		bsime;|
		bsolb;|
		bumpE;|
		bumpe;|
		caret;|
		caron;|
		ccaps;|
		ccedil|
		ccirc;|
		ccups;|
		cedil;|
		check;|
		clubs;|
		colon;|
		comma;|
		crarr;|
		cross;|
		csube;|
		csupe;|
		ctdot;|
		cuepr;|
		cuesc;|
		cupor;|
		curren|
		cuvee;|
		cuwed;|
		cwint;|
		dashv;|
		dblac;|
		ddarr;|
		delta;|
		dharl;|
		dharr;|
		diams;|
		disin;|
		divide|
		doteq;|
		dtdot;|
		dtrif;|
		duarr;|
		duhar;|
		eDDot;|
		eacute|
		ecirc;|
		efDot;|
		egrave|
		emacr;|
		empty;|
		eogon;|
		eplus;|
		epsiv;|
		eqsim;|
		equiv;|
		erDot;|
		erarr;|
		esdot;|
		exist;|
		fflig;|
		filig;|
		fjlig;|
		fllig;|
		fltns;|
		forkv;|
		frac12|
		frac14|
		frac34|
		frasl;|
		frown;|
		gamma;|
		gcirc;|
		gescc;|
		gimel;|
		gneqq;|
		gnsim;|
		grave;|
		gsime;|
		gsiml;|
		gtcir;|
		gtdot;|
		harrw;|
		hcirc;|
		hoarr;|
		iacute|
		icirc;|
		iexcl;|
		igrave|
		iiint;|
		iiota;|
		ijlig;|
		imacr;|
		image;|
		imath;|
		imped;|
		infin;|
		iogon;|
		iprod;|
		iquest|
		isinE;|
		isins;|
		isinv;|
		iukcy;|
		jcirc;|
		jmath;|
		jukcy;|
		kappa;|
		lAarr;|
		lBarr;|
		langd;|
		laquo;|
		larrb;|
		lates;|
		lbarr;|
		lbbrk;|
		lbrke;|
		lceil;|
		ldquo;|
		lescc;|
		lhard;|
		lharu;|
		lhblk;|
		llarr;|
		lltri;|
		lneqq;|
		lnsim;|
		loang;|
		loarr;|
		lobrk;|
		lopar;|
		lrarr;|
		lrhar;|
		lrtri;|
		lsime;|
		lsimg;|
		lsquo;|
		ltcir;|
		ltdot;|
		ltrie;|
		ltrif;|
		mDDot;|
		mdash;|
		micro;|
		middot|
		minus;|
		mumap;|
		nabla;|
		napid;|
		napos;|
		natur;|
		nbump;|
		ncong;|
		ndash;|
		neArr;|
		nearr;|
		nedot;|
		nesim;|
		ngeqq;|
		ngsim;|
		nhArr;|
		nharr;|
		nhpar;|
		nlArr;|
		nlarr;|
		nleqq;|
		nless;|
		nlsim;|
		nltri;|
		notin;|
		notni;|
		npart;|
		nprec;|
		nrArr;|
		nrarr;|
		nrtri;|
		nsime;|
		nsmid;|
		nspar;|
		nsubE;|
		nsube;|
		nsucc;|
		nsupE;|
		nsupe;|
		ntilde|
		numsp;|
		nvsim;|
		nwArr;|
		nwarr;|
		oacute|
		ocirc;|
		odash;|
		oelig;|
		ofcir;|
		ograve|
		ohbar;|
		olarr;|
		olcir;|
		oline;|
		omacr;|
		omega;|
		operp;|
		oplus;|
		orarr;|
		order;|
		oslash|
		otilde|
		ovbar;|
		parsl;|
		phone;|
		plusb;|
		pluse;|
		plusmn|
		pound;|
		prcue;|
		prime;|
		prnap;|
		prsim;|
		quest;|
		rAarr;|
		rBarr;|
		radic;|
		rangd;|
		range;|
		raquo;|
		rarrb;|
		rarrc;|
		rarrw;|
		ratio;|
		rbarr;|
		rbbrk;|
		rbrke;|
		rceil;|
		rdquo;|
		reals;|
		rhard;|
		rharu;|
		rlarr;|
		rlhar;|
		rnmid;|
		roang;|
		roarr;|
		robrk;|
		ropar;|
		rrarr;|
		rsquo;|
		rtrie;|
		rtrif;|
		sbquo;|
		sccue;|
		scirc;|
		scnap;|
		scsim;|
		sdotb;|
		sdote;|
		seArr;|
		searr;|
		setmn;|
		sharp;|
		sigma;|
		simeq;|
		simgE;|
		simlE;|
		simne;|
		slarr;|
		smile;|
		smtes;|
		sqcap;|
		sqcup;|
		sqsub;|
		sqsup;|
		srarr;|
		starf;|
		strns;|
		subnE;|
		subne;|
		supnE;|
		supne;|
		swArr;|
		swarr;|
		szlig;|
		theta;|
		thkap;|
		thorn;|
		tilde;|
		times;|
		trade;|
		trisb;|
		tshcy;|
		twixt;|
		uacute|
		ubrcy;|
		ucirc;|
		udarr;|
		udhar;|
		ugrave|
		uharl;|
		uharr;|
		uhblk;|
		ultri;|
		umacr;|
		uogon;|
		uplus;|
		upsih;|
		uring;|
		urtri;|
		utdot;|
		utrif;|
		uuarr;|
		vBarv;|
		vDash;|
		varpi;|
		vdash;|
		veeeq;|
		vltri;|
		vnsub;|
		vnsup;|
		vprop;|
		vrtri;|
		wcirc;|
		wedge;|
		xcirc;|
		xdtri;|
		xhArr;|
		xharr;|
		xlArr;|
		xlarr;|
		xodot;|
		xrArr;|
		xrarr;|
		xutri;|
		yacute|
		ycirc;|
		AElig|
		Acirc|
		Aopf;|
		Aring|
		Ascr;|
		Auml;|
		Barv;|
		Beta;|
		Bopf;|
		Bscr;|
		CHcy;|
		COPY;|
		Cdot;|
		Copf;|
		Cscr;|
		DJcy;|
		DScy;|
		DZcy;|
		Darr;|
		Dopf;|
		Dscr;|
		Ecirc|
		Edot;|
		Eopf;|
		Escr;|
		Esim;|
		Euml;|
		Fopf;|
		Fscr;|
		GJcy;|
		Gdot;|
		Gopf;|
		Gscr;|
		Hopf;|
		Hscr;|
		IEcy;|
		IOcy;|
		Icirc|
		Idot;|
		Iopf;|
		Iota;|
		Iscr;|
		Iuml;|
		Jopf;|
		Jscr;|
		KHcy;|
		KJcy;|
		Kopf;|
		Kscr;|
		LJcy;|
		Lang;|
		Larr;|
		Lopf;|
		Lscr;|
		Mopf;|
		Mscr;|
		NJcy;|
		Nopf;|
		Nscr;|
		Ocirc|
		Oopf;|
		Oscr;|
		Ouml;|
		Popf;|
		Pscr;|
		QUOT;|
		Qopf;|
		Qscr;|
		Rang;|
		Rarr;|
		Ropf;|
		Rscr;|
		SHcy;|
		Sopf;|
		Sqrt;|
		Sscr;|
		Star;|
		THORN|
		TScy;|
		Topf;|
		Tscr;|
		Uarr;|
		Ucirc|
		Uopf;|
		Upsi;|
		Uscr;|
		Uuml;|
		Vbar;|
		Vert;|
		Vopf;|
		Vscr;|
		Wopf;|
		Wscr;|
		Xopf;|
		Xscr;|
		YAcy;|
		YIcy;|
		YUcy;|
		Yopf;|
		Yscr;|
		Yuml;|
		ZHcy;|
		Zdot;|
		Zeta;|
		Zopf;|
		Zscr;|
		acirc|
		acute|
		aelig|
		andd;|
		andv;|
		ange;|
		aopf;|
		apid;|
		apos;|
		aring|
		ascr;|
		auml;|
		bNot;|
		bbrk;|
		beta;|
		beth;|
		bnot;|
		bopf;|
		boxH;|
		boxV;|
		boxh;|
		boxv;|
		bscr;|
		bsim;|
		bsol;|
		bull;|
		bump;|
		caps;|
		cdot;|
		cedil|
		cent;|
		chcy;|
		cirE;|
		circ;|
		cire;|
		comp;|
		cong;|
		copf;|
		copy;|
		cscr;|
		csub;|
		csup;|
		cups;|
		dArr;|
		dHar;|
		darr;|
		dash;|
		diam;|
		djcy;|
		dopf;|
		dscr;|
		dscy;|
		dsol;|
		dtri;|
		dzcy;|
		eDot;|
		ecir;|
		ecirc|
		edot;|
		emsp;|
		ensp;|
		eopf;|
		epar;|
		epsi;|
		escr;|
		esim;|
		euml;|
		euro;|
		excl;|
		flat;|
		fnof;|
		fopf;|
		fork;|
		fscr;|
		gdot;|
		geqq;|
		gesl;|
		gjcy;|
		gnap;|
		gneq;|
		gopf;|
		gscr;|
		gsim;|
		gtcc;|
		gvnE;|
		hArr;|
		half;|
		harr;|
		hbar;|
		hopf;|
		hscr;|
		icirc|
		iecy;|
		iexcl|
		imof;|
		iocy;|
		iopf;|
		iota;|
		iscr;|
		isin;|
		iuml;|
		jopf;|
		jscr;|
		khcy;|
		kjcy;|
		kopf;|
		kscr;|
		lArr;|
		lHar;|
		lang;|
		laquo|
		larr;|
		late;|
		lcub;|
		ldca;|
		ldsh;|
		leqq;|
		lesg;|
		ljcy;|
		lnap;|
		lneq;|
		lopf;|
		lozf;|
		lpar;|
		lscr;|
		lsim;|
		lsqb;|
		ltcc;|
		ltri;|
		lvnE;|
		macr;|
		male;|
		malt;|
		micro|
		mlcp;|
		mldr;|
		mopf;|
		mscr;|
		nGtv;|
		nLtv;|
		nang;|
		napE;|
		nbsp;|
		ncap;|
		ncup;|
		ngeq;|
		nges;|
		ngtr;|
		nisd;|
		njcy;|
		nldr;|
		nleq;|
		nles;|
		nmid;|
		nopf;|
		npar;|
		npre;|
		nsce;|
		nscr;|
		nsim;|
		nsub;|
		nsup;|
		ntgl;|
		ntlg;|
		nvap;|
		nvge;|
		nvgt;|
		nvle;|
		nvlt;|
		oast;|
		ocir;|
		ocirc|
		odiv;|
		odot;|
		ogon;|
		oint;|
		omid;|
		oopf;|
		opar;|
		ordf;|
		ordm;|
		oror;|
		oscr;|
		osol;|
		ouml;|
		para;|
		part;|
		perp;|
		phiv;|
		plus;|
		popf;|
		pound|
		prap;|
		prec;|
		prnE;|
		prod;|
		prop;|
		pscr;|
		qint;|
		qopf;|
		qscr;|
		quot;|
		rArr;|
		rHar;|
		race;|
		rang;|
		raquo|
		rarr;|
		rcub;|
		rdca;|
		rdsh;|
		real;|
		rect;|
		rhov;|
		ring;|
		ropf;|
		rpar;|
		rscr;|
		rsqb;|
		rtri;|
		scap;|
		scnE;|
		sdot;|
		sect;|
		semi;|
		sext;|
		shcy;|
		sime;|
		simg;|
		siml;|
		smid;|
		smte;|
		solb;|
		sopf;|
		spar;|
		squf;|
		sscr;|
		star;|
		subE;|
		sube;|
		succ;|
		sung;|
		sup1;|
		sup2;|
		sup3;|
		supE;|
		supe;|
		szlig|
		tbrk;|
		tdot;|
		thorn|
		times|
		tint;|
		toea;|
		topf;|
		tosa;|
		trie;|
		tscr;|
		tscy;|
		uArr;|
		uHar;|
		uarr;|
		ucirc|
		uopf;|
		upsi;|
		uscr;|
		utri;|
		uuml;|
		vArr;|
		vBar;|
		varr;|
		vert;|
		vopf;|
		vscr;|
		wopf;|
		wscr;|
		xcap;|
		xcup;|
		xmap;|
		xnis;|
		xopf;|
		xscr;|
		xvee;|
		yacy;|
		yicy;|
		yopf;|
		yscr;|
		yucy;|
		yuml;|
		zdot;|
		zeta;|
		zhcy;|
		zopf;|
		zscr;|
		zwnj;|
		AMP;|
		Acy;|
		Afr;|
		And;|
		Auml|
		Bcy;|
		Bfr;|
		COPY|
		Cap;|
		Cfr;|
		Chi;|
		Cup;|
		Dcy;|
		Del;|
		Dfr;|
		Dot;|
		ENG;|
		ETH;|
		Ecy;|
		Efr;|
		Eta;|
		Euml|
		Fcy;|
		Ffr;|
		Gcy;|
		Gfr;|
		Hat;|
		Hfr;|
		Icy;|
		Ifr;|
		Int;|
		Iuml|
		Jcy;|
		Jfr;|
		Kcy;|
		Kfr;|
		Lcy;|
		Lfr;|
		Lsh;|
		Map;|
		Mcy;|
		Mfr;|
		Ncy;|
		Nfr;|
		Not;|
		Ocy;|
		Ofr;|
		Ouml|
		Pcy;|
		Pfr;|
		Phi;|
		Psi;|
		QUOT|
		Qfr;|
		REG;|
		Rcy;|
		Rfr;|
		Rho;|
		Rsh;|
		Scy;|
		Sfr;|
		Sub;|
		Sum;|
		Sup;|
		Tab;|
		Tau;|
		Tcy;|
		Tfr;|
		Ucy;|
		Ufr;|
		Uuml|
		Vcy;|
		Vee;|
		Vfr;|
		Wfr;|
		Xfr;|
		Ycy;|
		Yfr;|
		Zcy;|
		Zfr;|
		acE;|
		acd;|
		acy;|
		afr;|
		amp;|
		and;|
		ang;|
		apE;|
		ape;|
		ast;|
		auml|
		bcy;|
		bfr;|
		bne;|
		bot;|
		cap;|
		cent|
		cfr;|
		chi;|
		cir;|
		copy|
		cup;|
		dcy;|
		deg;|
		dfr;|
		die;|
		div;|
		dot;|
		ecy;|
		efr;|
		egs;|
		ell;|
		els;|
		eng;|
		eta;|
		eth;|
		euml|
		fcy;|
		ffr;|
		gEl;|
		gap;|
		gcy;|
		gel;|
		geq;|
		ges;|
		gfr;|
		ggg;|
		glE;|
		gla;|
		glj;|
		gnE;|
		gne;|
		hfr;|
		icy;|
		iff;|
		ifr;|
		int;|
		iuml|
		jcy;|
		jfr;|
		kcy;|
		kfr;|
		lEg;|
		lap;|
		lat;|
		lcy;|
		leg;|
		leq;|
		les;|
		lfr;|
		lgE;|
		lnE;|
		lne;|
		loz;|
		lrm;|
		lsh;|
		macr|
		map;|
		mcy;|
		mfr;|
		mho;|
		mid;|
		nGg;|
		nGt;|
		nLl;|
		nLt;|
		nap;|
		nbsp|
		ncy;|
		nfr;|
		ngE;|
		nge;|
		ngt;|
		nis;|
		niv;|
		nlE;|
		nle;|
		nlt;|
		not;|
		npr;|
		nsc;|
		num;|
		ocy;|
		ofr;|
		ogt;|
		ohm;|
		olt;|
		ord;|
		ordf|
		ordm|
		orv;|
		ouml|
		par;|
		para|
		pcy;|
		pfr;|
		phi;|
		piv;|
		prE;|
		pre;|
		psi;|
		qfr;|
		quot|
		rcy;|
		reg;|
		rfr;|
		rho;|
		rlm;|
		rsh;|
		scE;|
		sce;|
		scy;|
		sect|
		sfr;|
		shy;|
		sim;|
		smt;|
		sol;|
		squ;|
		sub;|
		sum;|
		sup1|
		sup2|
		sup3|
		sup;|
		tau;|
		tcy;|
		tfr;|
		top;|
		ucy;|
		ufr;|
		uml;|
		uuml|
		vcy;|
		vee;|
		vfr;|
		wfr;|
		xfr;|
		ycy;|
		yen;|
		yfr;|
		yuml|
		zcy;|
		zfr;|
		zwj;|
		AMP|
		DD;|
		ETH|
		GT;|
		Gg;|
		Gt;|
		Im;|
		LT;|
		Ll;|
		Lt;|
		Mu;|
		Nu;|
		Or;|
		Pi;|
		Pr;|
		REG|
		Re;|
		Sc;|
		Xi;|
		ac;|
		af;|
		amp|
		ap;|
		dd;|
		deg|
		ee;|
		eg;|
		el;|
		eth|
		gE;|
		ge;|
		gg;|
		gl;|
		gt;|
		ic;|
		ii;|
		in;|
		it;|
		lE;|
		le;|
		lg;|
		ll;|
		lt;|
		mp;|
		mu;|
		ne;|
		ni;|
		not|
		nu;|
		oS;|
		or;|
		pi;|
		pm;|
		pr;|
		reg|
		rx;|
		sc;|
		shy|
		uml|
		wp;|
		wr;|
		xi;|
		yen|
		GT|
		LT|
		gt|
		lt) # 6. known named
					(?:
						(?<! ; )             # Assert no semicolon prior
						( [=a-zA-Z0-9] )     # 7. attribute suffix
					)?
					|
					( [a-zA-Z0-9]+ ; )       # 8. invalid named
				)
				# S = study, for efficient knownNamed
				# A = anchor, to avoid unnecessary movement of the whole pattern on failure
				~xAsS';
	static public $namedEntityTranslations = array (
  'Aacute;' => '??',
  'Aacute' => '??',
  'aacute;' => '??',
  'aacute' => '??',
  'Abreve;' => '??',
  'abreve;' => '??',
  'ac;' => '???',
  'acd;' => '???',
  'acE;' => '?????',
  'Acirc;' => '??',
  'Acirc' => '??',
  'acirc;' => '??',
  'acirc' => '??',
  'acute;' => '??',
  'acute' => '??',
  'Acy;' => '??',
  'acy;' => '??',
  'AElig;' => '??',
  'AElig' => '??',
  'aelig;' => '??',
  'aelig' => '??',
  'af;' => '???',
  'Afr;' => '????',
  'afr;' => '????',
  'Agrave;' => '??',
  'Agrave' => '??',
  'agrave;' => '??',
  'agrave' => '??',
  'alefsym;' => '???',
  'aleph;' => '???',
  'Alpha;' => '??',
  'alpha;' => '??',
  'Amacr;' => '??',
  'amacr;' => '??',
  'amalg;' => '???',
  'amp;' => '&',
  'amp' => '&',
  'AMP;' => '&',
  'AMP' => '&',
  'andand;' => '???',
  'And;' => '???',
  'and;' => '???',
  'andd;' => '???',
  'andslope;' => '???',
  'andv;' => '???',
  'ang;' => '???',
  'ange;' => '???',
  'angle;' => '???',
  'angmsdaa;' => '???',
  'angmsdab;' => '???',
  'angmsdac;' => '???',
  'angmsdad;' => '???',
  'angmsdae;' => '???',
  'angmsdaf;' => '???',
  'angmsdag;' => '???',
  'angmsdah;' => '???',
  'angmsd;' => '???',
  'angrt;' => '???',
  'angrtvb;' => '???',
  'angrtvbd;' => '???',
  'angsph;' => '???',
  'angst;' => '??',
  'angzarr;' => '???',
  'Aogon;' => '??',
  'aogon;' => '??',
  'Aopf;' => '????',
  'aopf;' => '????',
  'apacir;' => '???',
  'ap;' => '???',
  'apE;' => '???',
  'ape;' => '???',
  'apid;' => '???',
  'apos;' => '\'',
  'ApplyFunction;' => '???',
  'approx;' => '???',
  'approxeq;' => '???',
  'Aring;' => '??',
  'Aring' => '??',
  'aring;' => '??',
  'aring' => '??',
  'Ascr;' => '????',
  'ascr;' => '????',
  'Assign;' => '???',
  'ast;' => '*',
  'asymp;' => '???',
  'asympeq;' => '???',
  'Atilde;' => '??',
  'Atilde' => '??',
  'atilde;' => '??',
  'atilde' => '??',
  'Auml;' => '??',
  'Auml' => '??',
  'auml;' => '??',
  'auml' => '??',
  'awconint;' => '???',
  'awint;' => '???',
  'backcong;' => '???',
  'backepsilon;' => '??',
  'backprime;' => '???',
  'backsim;' => '???',
  'backsimeq;' => '???',
  'Backslash;' => '???',
  'Barv;' => '???',
  'barvee;' => '???',
  'barwed;' => '???',
  'Barwed;' => '???',
  'barwedge;' => '???',
  'bbrk;' => '???',
  'bbrktbrk;' => '???',
  'bcong;' => '???',
  'Bcy;' => '??',
  'bcy;' => '??',
  'bdquo;' => '???',
  'becaus;' => '???',
  'because;' => '???',
  'Because;' => '???',
  'bemptyv;' => '???',
  'bepsi;' => '??',
  'bernou;' => '???',
  'Bernoullis;' => '???',
  'Beta;' => '??',
  'beta;' => '??',
  'beth;' => '???',
  'between;' => '???',
  'Bfr;' => '????',
  'bfr;' => '????',
  'bigcap;' => '???',
  'bigcirc;' => '???',
  'bigcup;' => '???',
  'bigodot;' => '???',
  'bigoplus;' => '???',
  'bigotimes;' => '???',
  'bigsqcup;' => '???',
  'bigstar;' => '???',
  'bigtriangledown;' => '???',
  'bigtriangleup;' => '???',
  'biguplus;' => '???',
  'bigvee;' => '???',
  'bigwedge;' => '???',
  'bkarow;' => '???',
  'blacklozenge;' => '???',
  'blacksquare;' => '???',
  'blacktriangle;' => '???',
  'blacktriangledown;' => '???',
  'blacktriangleleft;' => '???',
  'blacktriangleright;' => '???',
  'blank;' => '???',
  'blk12;' => '???',
  'blk14;' => '???',
  'blk34;' => '???',
  'block;' => '???',
  'bne;' => '=???',
  'bnequiv;' => '??????',
  'bNot;' => '???',
  'bnot;' => '???',
  'Bopf;' => '????',
  'bopf;' => '????',
  'bot;' => '???',
  'bottom;' => '???',
  'bowtie;' => '???',
  'boxbox;' => '???',
  'boxdl;' => '???',
  'boxdL;' => '???',
  'boxDl;' => '???',
  'boxDL;' => '???',
  'boxdr;' => '???',
  'boxdR;' => '???',
  'boxDr;' => '???',
  'boxDR;' => '???',
  'boxh;' => '???',
  'boxH;' => '???',
  'boxhd;' => '???',
  'boxHd;' => '???',
  'boxhD;' => '???',
  'boxHD;' => '???',
  'boxhu;' => '???',
  'boxHu;' => '???',
  'boxhU;' => '???',
  'boxHU;' => '???',
  'boxminus;' => '???',
  'boxplus;' => '???',
  'boxtimes;' => '???',
  'boxul;' => '???',
  'boxuL;' => '???',
  'boxUl;' => '???',
  'boxUL;' => '???',
  'boxur;' => '???',
  'boxuR;' => '???',
  'boxUr;' => '???',
  'boxUR;' => '???',
  'boxv;' => '???',
  'boxV;' => '???',
  'boxvh;' => '???',
  'boxvH;' => '???',
  'boxVh;' => '???',
  'boxVH;' => '???',
  'boxvl;' => '???',
  'boxvL;' => '???',
  'boxVl;' => '???',
  'boxVL;' => '???',
  'boxvr;' => '???',
  'boxvR;' => '???',
  'boxVr;' => '???',
  'boxVR;' => '???',
  'bprime;' => '???',
  'breve;' => '??',
  'Breve;' => '??',
  'brvbar;' => '??',
  'brvbar' => '??',
  'bscr;' => '????',
  'Bscr;' => '???',
  'bsemi;' => '???',
  'bsim;' => '???',
  'bsime;' => '???',
  'bsolb;' => '???',
  'bsol;' => '\\',
  'bsolhsub;' => '???',
  'bull;' => '???',
  'bullet;' => '???',
  'bump;' => '???',
  'bumpE;' => '???',
  'bumpe;' => '???',
  'Bumpeq;' => '???',
  'bumpeq;' => '???',
  'Cacute;' => '??',
  'cacute;' => '??',
  'capand;' => '???',
  'capbrcup;' => '???',
  'capcap;' => '???',
  'cap;' => '???',
  'Cap;' => '???',
  'capcup;' => '???',
  'capdot;' => '???',
  'CapitalDifferentialD;' => '???',
  'caps;' => '??????',
  'caret;' => '???',
  'caron;' => '??',
  'Cayleys;' => '???',
  'ccaps;' => '???',
  'Ccaron;' => '??',
  'ccaron;' => '??',
  'Ccedil;' => '??',
  'Ccedil' => '??',
  'ccedil;' => '??',
  'ccedil' => '??',
  'Ccirc;' => '??',
  'ccirc;' => '??',
  'Cconint;' => '???',
  'ccups;' => '???',
  'ccupssm;' => '???',
  'Cdot;' => '??',
  'cdot;' => '??',
  'cedil;' => '??',
  'cedil' => '??',
  'Cedilla;' => '??',
  'cemptyv;' => '???',
  'cent;' => '??',
  'cent' => '??',
  'centerdot;' => '??',
  'CenterDot;' => '??',
  'cfr;' => '????',
  'Cfr;' => '???',
  'CHcy;' => '??',
  'chcy;' => '??',
  'check;' => '???',
  'checkmark;' => '???',
  'Chi;' => '??',
  'chi;' => '??',
  'circ;' => '??',
  'circeq;' => '???',
  'circlearrowleft;' => '???',
  'circlearrowright;' => '???',
  'circledast;' => '???',
  'circledcirc;' => '???',
  'circleddash;' => '???',
  'CircleDot;' => '???',
  'circledR;' => '??',
  'circledS;' => '???',
  'CircleMinus;' => '???',
  'CirclePlus;' => '???',
  'CircleTimes;' => '???',
  'cir;' => '???',
  'cirE;' => '???',
  'cire;' => '???',
  'cirfnint;' => '???',
  'cirmid;' => '???',
  'cirscir;' => '???',
  'ClockwiseContourIntegral;' => '???',
  'CloseCurlyDoubleQuote;' => '???',
  'CloseCurlyQuote;' => '???',
  'clubs;' => '???',
  'clubsuit;' => '???',
  'colon;' => ':',
  'Colon;' => '???',
  'Colone;' => '???',
  'colone;' => '???',
  'coloneq;' => '???',
  'comma;' => ',',
  'commat;' => '@',
  'comp;' => '???',
  'compfn;' => '???',
  'complement;' => '???',
  'complexes;' => '???',
  'cong;' => '???',
  'congdot;' => '???',
  'Congruent;' => '???',
  'conint;' => '???',
  'Conint;' => '???',
  'ContourIntegral;' => '???',
  'copf;' => '????',
  'Copf;' => '???',
  'coprod;' => '???',
  'Coproduct;' => '???',
  'copy;' => '??',
  'copy' => '??',
  'COPY;' => '??',
  'COPY' => '??',
  'copysr;' => '???',
  'CounterClockwiseContourIntegral;' => '???',
  'crarr;' => '???',
  'cross;' => '???',
  'Cross;' => '???',
  'Cscr;' => '????',
  'cscr;' => '????',
  'csub;' => '???',
  'csube;' => '???',
  'csup;' => '???',
  'csupe;' => '???',
  'ctdot;' => '???',
  'cudarrl;' => '???',
  'cudarrr;' => '???',
  'cuepr;' => '???',
  'cuesc;' => '???',
  'cularr;' => '???',
  'cularrp;' => '???',
  'cupbrcap;' => '???',
  'cupcap;' => '???',
  'CupCap;' => '???',
  'cup;' => '???',
  'Cup;' => '???',
  'cupcup;' => '???',
  'cupdot;' => '???',
  'cupor;' => '???',
  'cups;' => '??????',
  'curarr;' => '???',
  'curarrm;' => '???',
  'curlyeqprec;' => '???',
  'curlyeqsucc;' => '???',
  'curlyvee;' => '???',
  'curlywedge;' => '???',
  'curren;' => '??',
  'curren' => '??',
  'curvearrowleft;' => '???',
  'curvearrowright;' => '???',
  'cuvee;' => '???',
  'cuwed;' => '???',
  'cwconint;' => '???',
  'cwint;' => '???',
  'cylcty;' => '???',
  'dagger;' => '???',
  'Dagger;' => '???',
  'daleth;' => '???',
  'darr;' => '???',
  'Darr;' => '???',
  'dArr;' => '???',
  'dash;' => '???',
  'Dashv;' => '???',
  'dashv;' => '???',
  'dbkarow;' => '???',
  'dblac;' => '??',
  'Dcaron;' => '??',
  'dcaron;' => '??',
  'Dcy;' => '??',
  'dcy;' => '??',
  'ddagger;' => '???',
  'ddarr;' => '???',
  'DD;' => '???',
  'dd;' => '???',
  'DDotrahd;' => '???',
  'ddotseq;' => '???',
  'deg;' => '??',
  'deg' => '??',
  'Del;' => '???',
  'Delta;' => '??',
  'delta;' => '??',
  'demptyv;' => '???',
  'dfisht;' => '???',
  'Dfr;' => '????',
  'dfr;' => '????',
  'dHar;' => '???',
  'dharl;' => '???',
  'dharr;' => '???',
  'DiacriticalAcute;' => '??',
  'DiacriticalDot;' => '??',
  'DiacriticalDoubleAcute;' => '??',
  'DiacriticalGrave;' => '`',
  'DiacriticalTilde;' => '??',
  'diam;' => '???',
  'diamond;' => '???',
  'Diamond;' => '???',
  'diamondsuit;' => '???',
  'diams;' => '???',
  'die;' => '??',
  'DifferentialD;' => '???',
  'digamma;' => '??',
  'disin;' => '???',
  'div;' => '??',
  'divide;' => '??',
  'divide' => '??',
  'divideontimes;' => '???',
  'divonx;' => '???',
  'DJcy;' => '??',
  'djcy;' => '??',
  'dlcorn;' => '???',
  'dlcrop;' => '???',
  'dollar;' => '$',
  'Dopf;' => '????',
  'dopf;' => '????',
  'Dot;' => '??',
  'dot;' => '??',
  'DotDot;' => '???',
  'doteq;' => '???',
  'doteqdot;' => '???',
  'DotEqual;' => '???',
  'dotminus;' => '???',
  'dotplus;' => '???',
  'dotsquare;' => '???',
  'doublebarwedge;' => '???',
  'DoubleContourIntegral;' => '???',
  'DoubleDot;' => '??',
  'DoubleDownArrow;' => '???',
  'DoubleLeftArrow;' => '???',
  'DoubleLeftRightArrow;' => '???',
  'DoubleLeftTee;' => '???',
  'DoubleLongLeftArrow;' => '???',
  'DoubleLongLeftRightArrow;' => '???',
  'DoubleLongRightArrow;' => '???',
  'DoubleRightArrow;' => '???',
  'DoubleRightTee;' => '???',
  'DoubleUpArrow;' => '???',
  'DoubleUpDownArrow;' => '???',
  'DoubleVerticalBar;' => '???',
  'DownArrowBar;' => '???',
  'downarrow;' => '???',
  'DownArrow;' => '???',
  'Downarrow;' => '???',
  'DownArrowUpArrow;' => '???',
  'DownBreve;' => '??',
  'downdownarrows;' => '???',
  'downharpoonleft;' => '???',
  'downharpoonright;' => '???',
  'DownLeftRightVector;' => '???',
  'DownLeftTeeVector;' => '???',
  'DownLeftVectorBar;' => '???',
  'DownLeftVector;' => '???',
  'DownRightTeeVector;' => '???',
  'DownRightVectorBar;' => '???',
  'DownRightVector;' => '???',
  'DownTeeArrow;' => '???',
  'DownTee;' => '???',
  'drbkarow;' => '???',
  'drcorn;' => '???',
  'drcrop;' => '???',
  'Dscr;' => '????',
  'dscr;' => '????',
  'DScy;' => '??',
  'dscy;' => '??',
  'dsol;' => '???',
  'Dstrok;' => '??',
  'dstrok;' => '??',
  'dtdot;' => '???',
  'dtri;' => '???',
  'dtrif;' => '???',
  'duarr;' => '???',
  'duhar;' => '???',
  'dwangle;' => '???',
  'DZcy;' => '??',
  'dzcy;' => '??',
  'dzigrarr;' => '???',
  'Eacute;' => '??',
  'Eacute' => '??',
  'eacute;' => '??',
  'eacute' => '??',
  'easter;' => '???',
  'Ecaron;' => '??',
  'ecaron;' => '??',
  'Ecirc;' => '??',
  'Ecirc' => '??',
  'ecirc;' => '??',
  'ecirc' => '??',
  'ecir;' => '???',
  'ecolon;' => '???',
  'Ecy;' => '??',
  'ecy;' => '??',
  'eDDot;' => '???',
  'Edot;' => '??',
  'edot;' => '??',
  'eDot;' => '???',
  'ee;' => '???',
  'efDot;' => '???',
  'Efr;' => '????',
  'efr;' => '????',
  'eg;' => '???',
  'Egrave;' => '??',
  'Egrave' => '??',
  'egrave;' => '??',
  'egrave' => '??',
  'egs;' => '???',
  'egsdot;' => '???',
  'el;' => '???',
  'Element;' => '???',
  'elinters;' => '???',
  'ell;' => '???',
  'els;' => '???',
  'elsdot;' => '???',
  'Emacr;' => '??',
  'emacr;' => '??',
  'empty;' => '???',
  'emptyset;' => '???',
  'EmptySmallSquare;' => '???',
  'emptyv;' => '???',
  'EmptyVerySmallSquare;' => '???',
  'emsp13;' => '???',
  'emsp14;' => '???',
  'emsp;' => '???',
  'ENG;' => '??',
  'eng;' => '??',
  'ensp;' => '???',
  'Eogon;' => '??',
  'eogon;' => '??',
  'Eopf;' => '????',
  'eopf;' => '????',
  'epar;' => '???',
  'eparsl;' => '???',
  'eplus;' => '???',
  'epsi;' => '??',
  'Epsilon;' => '??',
  'epsilon;' => '??',
  'epsiv;' => '??',
  'eqcirc;' => '???',
  'eqcolon;' => '???',
  'eqsim;' => '???',
  'eqslantgtr;' => '???',
  'eqslantless;' => '???',
  'Equal;' => '???',
  'equals;' => '=',
  'EqualTilde;' => '???',
  'equest;' => '???',
  'Equilibrium;' => '???',
  'equiv;' => '???',
  'equivDD;' => '???',
  'eqvparsl;' => '???',
  'erarr;' => '???',
  'erDot;' => '???',
  'escr;' => '???',
  'Escr;' => '???',
  'esdot;' => '???',
  'Esim;' => '???',
  'esim;' => '???',
  'Eta;' => '??',
  'eta;' => '??',
  'ETH;' => '??',
  'ETH' => '??',
  'eth;' => '??',
  'eth' => '??',
  'Euml;' => '??',
  'Euml' => '??',
  'euml;' => '??',
  'euml' => '??',
  'euro;' => '???',
  'excl;' => '!',
  'exist;' => '???',
  'Exists;' => '???',
  'expectation;' => '???',
  'exponentiale;' => '???',
  'ExponentialE;' => '???',
  'fallingdotseq;' => '???',
  'Fcy;' => '??',
  'fcy;' => '??',
  'female;' => '???',
  'ffilig;' => '???',
  'fflig;' => '???',
  'ffllig;' => '???',
  'Ffr;' => '????',
  'ffr;' => '????',
  'filig;' => '???',
  'FilledSmallSquare;' => '???',
  'FilledVerySmallSquare;' => '???',
  'fjlig;' => 'fj',
  'flat;' => '???',
  'fllig;' => '???',
  'fltns;' => '???',
  'fnof;' => '??',
  'Fopf;' => '????',
  'fopf;' => '????',
  'forall;' => '???',
  'ForAll;' => '???',
  'fork;' => '???',
  'forkv;' => '???',
  'Fouriertrf;' => '???',
  'fpartint;' => '???',
  'frac12;' => '??',
  'frac12' => '??',
  'frac13;' => '???',
  'frac14;' => '??',
  'frac14' => '??',
  'frac15;' => '???',
  'frac16;' => '???',
  'frac18;' => '???',
  'frac23;' => '???',
  'frac25;' => '???',
  'frac34;' => '??',
  'frac34' => '??',
  'frac35;' => '???',
  'frac38;' => '???',
  'frac45;' => '???',
  'frac56;' => '???',
  'frac58;' => '???',
  'frac78;' => '???',
  'frasl;' => '???',
  'frown;' => '???',
  'fscr;' => '????',
  'Fscr;' => '???',
  'gacute;' => '??',
  'Gamma;' => '??',
  'gamma;' => '??',
  'Gammad;' => '??',
  'gammad;' => '??',
  'gap;' => '???',
  'Gbreve;' => '??',
  'gbreve;' => '??',
  'Gcedil;' => '??',
  'Gcirc;' => '??',
  'gcirc;' => '??',
  'Gcy;' => '??',
  'gcy;' => '??',
  'Gdot;' => '??',
  'gdot;' => '??',
  'ge;' => '???',
  'gE;' => '???',
  'gEl;' => '???',
  'gel;' => '???',
  'geq;' => '???',
  'geqq;' => '???',
  'geqslant;' => '???',
  'gescc;' => '???',
  'ges;' => '???',
  'gesdot;' => '???',
  'gesdoto;' => '???',
  'gesdotol;' => '???',
  'gesl;' => '??????',
  'gesles;' => '???',
  'Gfr;' => '????',
  'gfr;' => '????',
  'gg;' => '???',
  'Gg;' => '???',
  'ggg;' => '???',
  'gimel;' => '???',
  'GJcy;' => '??',
  'gjcy;' => '??',
  'gla;' => '???',
  'gl;' => '???',
  'glE;' => '???',
  'glj;' => '???',
  'gnap;' => '???',
  'gnapprox;' => '???',
  'gne;' => '???',
  'gnE;' => '???',
  'gneq;' => '???',
  'gneqq;' => '???',
  'gnsim;' => '???',
  'Gopf;' => '????',
  'gopf;' => '????',
  'grave;' => '`',
  'GreaterEqual;' => '???',
  'GreaterEqualLess;' => '???',
  'GreaterFullEqual;' => '???',
  'GreaterGreater;' => '???',
  'GreaterLess;' => '???',
  'GreaterSlantEqual;' => '???',
  'GreaterTilde;' => '???',
  'Gscr;' => '????',
  'gscr;' => '???',
  'gsim;' => '???',
  'gsime;' => '???',
  'gsiml;' => '???',
  'gtcc;' => '???',
  'gtcir;' => '???',
  'gt;' => '>',
  'gt' => '>',
  'GT;' => '>',
  'GT' => '>',
  'Gt;' => '???',
  'gtdot;' => '???',
  'gtlPar;' => '???',
  'gtquest;' => '???',
  'gtrapprox;' => '???',
  'gtrarr;' => '???',
  'gtrdot;' => '???',
  'gtreqless;' => '???',
  'gtreqqless;' => '???',
  'gtrless;' => '???',
  'gtrsim;' => '???',
  'gvertneqq;' => '??????',
  'gvnE;' => '??????',
  'Hacek;' => '??',
  'hairsp;' => '???',
  'half;' => '??',
  'hamilt;' => '???',
  'HARDcy;' => '??',
  'hardcy;' => '??',
  'harrcir;' => '???',
  'harr;' => '???',
  'hArr;' => '???',
  'harrw;' => '???',
  'Hat;' => '^',
  'hbar;' => '???',
  'Hcirc;' => '??',
  'hcirc;' => '??',
  'hearts;' => '???',
  'heartsuit;' => '???',
  'hellip;' => '???',
  'hercon;' => '???',
  'hfr;' => '????',
  'Hfr;' => '???',
  'HilbertSpace;' => '???',
  'hksearow;' => '???',
  'hkswarow;' => '???',
  'hoarr;' => '???',
  'homtht;' => '???',
  'hookleftarrow;' => '???',
  'hookrightarrow;' => '???',
  'hopf;' => '????',
  'Hopf;' => '???',
  'horbar;' => '???',
  'HorizontalLine;' => '???',
  'hscr;' => '????',
  'Hscr;' => '???',
  'hslash;' => '???',
  'Hstrok;' => '??',
  'hstrok;' => '??',
  'HumpDownHump;' => '???',
  'HumpEqual;' => '???',
  'hybull;' => '???',
  'hyphen;' => '???',
  'Iacute;' => '??',
  'Iacute' => '??',
  'iacute;' => '??',
  'iacute' => '??',
  'ic;' => '???',
  'Icirc;' => '??',
  'Icirc' => '??',
  'icirc;' => '??',
  'icirc' => '??',
  'Icy;' => '??',
  'icy;' => '??',
  'Idot;' => '??',
  'IEcy;' => '??',
  'iecy;' => '??',
  'iexcl;' => '??',
  'iexcl' => '??',
  'iff;' => '???',
  'ifr;' => '????',
  'Ifr;' => '???',
  'Igrave;' => '??',
  'Igrave' => '??',
  'igrave;' => '??',
  'igrave' => '??',
  'ii;' => '???',
  'iiiint;' => '???',
  'iiint;' => '???',
  'iinfin;' => '???',
  'iiota;' => '???',
  'IJlig;' => '??',
  'ijlig;' => '??',
  'Imacr;' => '??',
  'imacr;' => '??',
  'image;' => '???',
  'ImaginaryI;' => '???',
  'imagline;' => '???',
  'imagpart;' => '???',
  'imath;' => '??',
  'Im;' => '???',
  'imof;' => '???',
  'imped;' => '??',
  'Implies;' => '???',
  'incare;' => '???',
  'in;' => '???',
  'infin;' => '???',
  'infintie;' => '???',
  'inodot;' => '??',
  'intcal;' => '???',
  'int;' => '???',
  'Int;' => '???',
  'integers;' => '???',
  'Integral;' => '???',
  'intercal;' => '???',
  'Intersection;' => '???',
  'intlarhk;' => '???',
  'intprod;' => '???',
  'InvisibleComma;' => '???',
  'InvisibleTimes;' => '???',
  'IOcy;' => '??',
  'iocy;' => '??',
  'Iogon;' => '??',
  'iogon;' => '??',
  'Iopf;' => '????',
  'iopf;' => '????',
  'Iota;' => '??',
  'iota;' => '??',
  'iprod;' => '???',
  'iquest;' => '??',
  'iquest' => '??',
  'iscr;' => '????',
  'Iscr;' => '???',
  'isin;' => '???',
  'isindot;' => '???',
  'isinE;' => '???',
  'isins;' => '???',
  'isinsv;' => '???',
  'isinv;' => '???',
  'it;' => '???',
  'Itilde;' => '??',
  'itilde;' => '??',
  'Iukcy;' => '??',
  'iukcy;' => '??',
  'Iuml;' => '??',
  'Iuml' => '??',
  'iuml;' => '??',
  'iuml' => '??',
  'Jcirc;' => '??',
  'jcirc;' => '??',
  'Jcy;' => '??',
  'jcy;' => '??',
  'Jfr;' => '????',
  'jfr;' => '????',
  'jmath;' => '??',
  'Jopf;' => '????',
  'jopf;' => '????',
  'Jscr;' => '????',
  'jscr;' => '????',
  'Jsercy;' => '??',
  'jsercy;' => '??',
  'Jukcy;' => '??',
  'jukcy;' => '??',
  'Kappa;' => '??',
  'kappa;' => '??',
  'kappav;' => '??',
  'Kcedil;' => '??',
  'kcedil;' => '??',
  'Kcy;' => '??',
  'kcy;' => '??',
  'Kfr;' => '????',
  'kfr;' => '????',
  'kgreen;' => '??',
  'KHcy;' => '??',
  'khcy;' => '??',
  'KJcy;' => '??',
  'kjcy;' => '??',
  'Kopf;' => '????',
  'kopf;' => '????',
  'Kscr;' => '????',
  'kscr;' => '????',
  'lAarr;' => '???',
  'Lacute;' => '??',
  'lacute;' => '??',
  'laemptyv;' => '???',
  'lagran;' => '???',
  'Lambda;' => '??',
  'lambda;' => '??',
  'lang;' => '???',
  'Lang;' => '???',
  'langd;' => '???',
  'langle;' => '???',
  'lap;' => '???',
  'Laplacetrf;' => '???',
  'laquo;' => '??',
  'laquo' => '??',
  'larrb;' => '???',
  'larrbfs;' => '???',
  'larr;' => '???',
  'Larr;' => '???',
  'lArr;' => '???',
  'larrfs;' => '???',
  'larrhk;' => '???',
  'larrlp;' => '???',
  'larrpl;' => '???',
  'larrsim;' => '???',
  'larrtl;' => '???',
  'latail;' => '???',
  'lAtail;' => '???',
  'lat;' => '???',
  'late;' => '???',
  'lates;' => '??????',
  'lbarr;' => '???',
  'lBarr;' => '???',
  'lbbrk;' => '???',
  'lbrace;' => '{',
  'lbrack;' => '[',
  'lbrke;' => '???',
  'lbrksld;' => '???',
  'lbrkslu;' => '???',
  'Lcaron;' => '??',
  'lcaron;' => '??',
  'Lcedil;' => '??',
  'lcedil;' => '??',
  'lceil;' => '???',
  'lcub;' => '{',
  'Lcy;' => '??',
  'lcy;' => '??',
  'ldca;' => '???',
  'ldquo;' => '???',
  'ldquor;' => '???',
  'ldrdhar;' => '???',
  'ldrushar;' => '???',
  'ldsh;' => '???',
  'le;' => '???',
  'lE;' => '???',
  'LeftAngleBracket;' => '???',
  'LeftArrowBar;' => '???',
  'leftarrow;' => '???',
  'LeftArrow;' => '???',
  'Leftarrow;' => '???',
  'LeftArrowRightArrow;' => '???',
  'leftarrowtail;' => '???',
  'LeftCeiling;' => '???',
  'LeftDoubleBracket;' => '???',
  'LeftDownTeeVector;' => '???',
  'LeftDownVectorBar;' => '???',
  'LeftDownVector;' => '???',
  'LeftFloor;' => '???',
  'leftharpoondown;' => '???',
  'leftharpoonup;' => '???',
  'leftleftarrows;' => '???',
  'leftrightarrow;' => '???',
  'LeftRightArrow;' => '???',
  'Leftrightarrow;' => '???',
  'leftrightarrows;' => '???',
  'leftrightharpoons;' => '???',
  'leftrightsquigarrow;' => '???',
  'LeftRightVector;' => '???',
  'LeftTeeArrow;' => '???',
  'LeftTee;' => '???',
  'LeftTeeVector;' => '???',
  'leftthreetimes;' => '???',
  'LeftTriangleBar;' => '???',
  'LeftTriangle;' => '???',
  'LeftTriangleEqual;' => '???',
  'LeftUpDownVector;' => '???',
  'LeftUpTeeVector;' => '???',
  'LeftUpVectorBar;' => '???',
  'LeftUpVector;' => '???',
  'LeftVectorBar;' => '???',
  'LeftVector;' => '???',
  'lEg;' => '???',
  'leg;' => '???',
  'leq;' => '???',
  'leqq;' => '???',
  'leqslant;' => '???',
  'lescc;' => '???',
  'les;' => '???',
  'lesdot;' => '???',
  'lesdoto;' => '???',
  'lesdotor;' => '???',
  'lesg;' => '??????',
  'lesges;' => '???',
  'lessapprox;' => '???',
  'lessdot;' => '???',
  'lesseqgtr;' => '???',
  'lesseqqgtr;' => '???',
  'LessEqualGreater;' => '???',
  'LessFullEqual;' => '???',
  'LessGreater;' => '???',
  'lessgtr;' => '???',
  'LessLess;' => '???',
  'lesssim;' => '???',
  'LessSlantEqual;' => '???',
  'LessTilde;' => '???',
  'lfisht;' => '???',
  'lfloor;' => '???',
  'Lfr;' => '????',
  'lfr;' => '????',
  'lg;' => '???',
  'lgE;' => '???',
  'lHar;' => '???',
  'lhard;' => '???',
  'lharu;' => '???',
  'lharul;' => '???',
  'lhblk;' => '???',
  'LJcy;' => '??',
  'ljcy;' => '??',
  'llarr;' => '???',
  'll;' => '???',
  'Ll;' => '???',
  'llcorner;' => '???',
  'Lleftarrow;' => '???',
  'llhard;' => '???',
  'lltri;' => '???',
  'Lmidot;' => '??',
  'lmidot;' => '??',
  'lmoustache;' => '???',
  'lmoust;' => '???',
  'lnap;' => '???',
  'lnapprox;' => '???',
  'lne;' => '???',
  'lnE;' => '???',
  'lneq;' => '???',
  'lneqq;' => '???',
  'lnsim;' => '???',
  'loang;' => '???',
  'loarr;' => '???',
  'lobrk;' => '???',
  'longleftarrow;' => '???',
  'LongLeftArrow;' => '???',
  'Longleftarrow;' => '???',
  'longleftrightarrow;' => '???',
  'LongLeftRightArrow;' => '???',
  'Longleftrightarrow;' => '???',
  'longmapsto;' => '???',
  'longrightarrow;' => '???',
  'LongRightArrow;' => '???',
  'Longrightarrow;' => '???',
  'looparrowleft;' => '???',
  'looparrowright;' => '???',
  'lopar;' => '???',
  'Lopf;' => '????',
  'lopf;' => '????',
  'loplus;' => '???',
  'lotimes;' => '???',
  'lowast;' => '???',
  'lowbar;' => '_',
  'LowerLeftArrow;' => '???',
  'LowerRightArrow;' => '???',
  'loz;' => '???',
  'lozenge;' => '???',
  'lozf;' => '???',
  'lpar;' => '(',
  'lparlt;' => '???',
  'lrarr;' => '???',
  'lrcorner;' => '???',
  'lrhar;' => '???',
  'lrhard;' => '???',
  'lrm;' => '???',
  'lrtri;' => '???',
  'lsaquo;' => '???',
  'lscr;' => '????',
  'Lscr;' => '???',
  'lsh;' => '???',
  'Lsh;' => '???',
  'lsim;' => '???',
  'lsime;' => '???',
  'lsimg;' => '???',
  'lsqb;' => '[',
  'lsquo;' => '???',
  'lsquor;' => '???',
  'Lstrok;' => '??',
  'lstrok;' => '??',
  'ltcc;' => '???',
  'ltcir;' => '???',
  'lt;' => '<',
  'lt' => '<',
  'LT;' => '<',
  'LT' => '<',
  'Lt;' => '???',
  'ltdot;' => '???',
  'lthree;' => '???',
  'ltimes;' => '???',
  'ltlarr;' => '???',
  'ltquest;' => '???',
  'ltri;' => '???',
  'ltrie;' => '???',
  'ltrif;' => '???',
  'ltrPar;' => '???',
  'lurdshar;' => '???',
  'luruhar;' => '???',
  'lvertneqq;' => '??????',
  'lvnE;' => '??????',
  'macr;' => '??',
  'macr' => '??',
  'male;' => '???',
  'malt;' => '???',
  'maltese;' => '???',
  'Map;' => '???',
  'map;' => '???',
  'mapsto;' => '???',
  'mapstodown;' => '???',
  'mapstoleft;' => '???',
  'mapstoup;' => '???',
  'marker;' => '???',
  'mcomma;' => '???',
  'Mcy;' => '??',
  'mcy;' => '??',
  'mdash;' => '???',
  'mDDot;' => '???',
  'measuredangle;' => '???',
  'MediumSpace;' => '???',
  'Mellintrf;' => '???',
  'Mfr;' => '????',
  'mfr;' => '????',
  'mho;' => '???',
  'micro;' => '??',
  'micro' => '??',
  'midast;' => '*',
  'midcir;' => '???',
  'mid;' => '???',
  'middot;' => '??',
  'middot' => '??',
  'minusb;' => '???',
  'minus;' => '???',
  'minusd;' => '???',
  'minusdu;' => '???',
  'MinusPlus;' => '???',
  'mlcp;' => '???',
  'mldr;' => '???',
  'mnplus;' => '???',
  'models;' => '???',
  'Mopf;' => '????',
  'mopf;' => '????',
  'mp;' => '???',
  'mscr;' => '????',
  'Mscr;' => '???',
  'mstpos;' => '???',
  'Mu;' => '??',
  'mu;' => '??',
  'multimap;' => '???',
  'mumap;' => '???',
  'nabla;' => '???',
  'Nacute;' => '??',
  'nacute;' => '??',
  'nang;' => '??????',
  'nap;' => '???',
  'napE;' => '?????',
  'napid;' => '?????',
  'napos;' => '??',
  'napprox;' => '???',
  'natural;' => '???',
  'naturals;' => '???',
  'natur;' => '???',
  'nbsp;' => '??',
  'nbsp' => '??',
  'nbump;' => '?????',
  'nbumpe;' => '?????',
  'ncap;' => '???',
  'Ncaron;' => '??',
  'ncaron;' => '??',
  'Ncedil;' => '??',
  'ncedil;' => '??',
  'ncong;' => '???',
  'ncongdot;' => '?????',
  'ncup;' => '???',
  'Ncy;' => '??',
  'ncy;' => '??',
  'ndash;' => '???',
  'nearhk;' => '???',
  'nearr;' => '???',
  'neArr;' => '???',
  'nearrow;' => '???',
  'ne;' => '???',
  'nedot;' => '?????',
  'NegativeMediumSpace;' => '???',
  'NegativeThickSpace;' => '???',
  'NegativeThinSpace;' => '???',
  'NegativeVeryThinSpace;' => '???',
  'nequiv;' => '???',
  'nesear;' => '???',
  'nesim;' => '?????',
  'NestedGreaterGreater;' => '???',
  'NestedLessLess;' => '???',
  'NewLine;' => '
',
  'nexist;' => '???',
  'nexists;' => '???',
  'Nfr;' => '????',
  'nfr;' => '????',
  'ngE;' => '?????',
  'nge;' => '???',
  'ngeq;' => '???',
  'ngeqq;' => '?????',
  'ngeqslant;' => '?????',
  'nges;' => '?????',
  'nGg;' => '?????',
  'ngsim;' => '???',
  'nGt;' => '??????',
  'ngt;' => '???',
  'ngtr;' => '???',
  'nGtv;' => '?????',
  'nharr;' => '???',
  'nhArr;' => '???',
  'nhpar;' => '???',
  'ni;' => '???',
  'nis;' => '???',
  'nisd;' => '???',
  'niv;' => '???',
  'NJcy;' => '??',
  'njcy;' => '??',
  'nlarr;' => '???',
  'nlArr;' => '???',
  'nldr;' => '???',
  'nlE;' => '?????',
  'nle;' => '???',
  'nleftarrow;' => '???',
  'nLeftarrow;' => '???',
  'nleftrightarrow;' => '???',
  'nLeftrightarrow;' => '???',
  'nleq;' => '???',
  'nleqq;' => '?????',
  'nleqslant;' => '?????',
  'nles;' => '?????',
  'nless;' => '???',
  'nLl;' => '?????',
  'nlsim;' => '???',
  'nLt;' => '??????',
  'nlt;' => '???',
  'nltri;' => '???',
  'nltrie;' => '???',
  'nLtv;' => '?????',
  'nmid;' => '???',
  'NoBreak;' => '???',
  'NonBreakingSpace;' => '??',
  'nopf;' => '????',
  'Nopf;' => '???',
  'Not;' => '???',
  'not;' => '??',
  'not' => '??',
  'NotCongruent;' => '???',
  'NotCupCap;' => '???',
  'NotDoubleVerticalBar;' => '???',
  'NotElement;' => '???',
  'NotEqual;' => '???',
  'NotEqualTilde;' => '?????',
  'NotExists;' => '???',
  'NotGreater;' => '???',
  'NotGreaterEqual;' => '???',
  'NotGreaterFullEqual;' => '?????',
  'NotGreaterGreater;' => '?????',
  'NotGreaterLess;' => '???',
  'NotGreaterSlantEqual;' => '?????',
  'NotGreaterTilde;' => '???',
  'NotHumpDownHump;' => '?????',
  'NotHumpEqual;' => '?????',
  'notin;' => '???',
  'notindot;' => '?????',
  'notinE;' => '?????',
  'notinva;' => '???',
  'notinvb;' => '???',
  'notinvc;' => '???',
  'NotLeftTriangleBar;' => '?????',
  'NotLeftTriangle;' => '???',
  'NotLeftTriangleEqual;' => '???',
  'NotLess;' => '???',
  'NotLessEqual;' => '???',
  'NotLessGreater;' => '???',
  'NotLessLess;' => '?????',
  'NotLessSlantEqual;' => '?????',
  'NotLessTilde;' => '???',
  'NotNestedGreaterGreater;' => '?????',
  'NotNestedLessLess;' => '?????',
  'notni;' => '???',
  'notniva;' => '???',
  'notnivb;' => '???',
  'notnivc;' => '???',
  'NotPrecedes;' => '???',
  'NotPrecedesEqual;' => '?????',
  'NotPrecedesSlantEqual;' => '???',
  'NotReverseElement;' => '???',
  'NotRightTriangleBar;' => '?????',
  'NotRightTriangle;' => '???',
  'NotRightTriangleEqual;' => '???',
  'NotSquareSubset;' => '?????',
  'NotSquareSubsetEqual;' => '???',
  'NotSquareSuperset;' => '?????',
  'NotSquareSupersetEqual;' => '???',
  'NotSubset;' => '??????',
  'NotSubsetEqual;' => '???',
  'NotSucceeds;' => '???',
  'NotSucceedsEqual;' => '?????',
  'NotSucceedsSlantEqual;' => '???',
  'NotSucceedsTilde;' => '?????',
  'NotSuperset;' => '??????',
  'NotSupersetEqual;' => '???',
  'NotTilde;' => '???',
  'NotTildeEqual;' => '???',
  'NotTildeFullEqual;' => '???',
  'NotTildeTilde;' => '???',
  'NotVerticalBar;' => '???',
  'nparallel;' => '???',
  'npar;' => '???',
  'nparsl;' => '??????',
  'npart;' => '?????',
  'npolint;' => '???',
  'npr;' => '???',
  'nprcue;' => '???',
  'nprec;' => '???',
  'npreceq;' => '?????',
  'npre;' => '?????',
  'nrarrc;' => '?????',
  'nrarr;' => '???',
  'nrArr;' => '???',
  'nrarrw;' => '?????',
  'nrightarrow;' => '???',
  'nRightarrow;' => '???',
  'nrtri;' => '???',
  'nrtrie;' => '???',
  'nsc;' => '???',
  'nsccue;' => '???',
  'nsce;' => '?????',
  'Nscr;' => '????',
  'nscr;' => '????',
  'nshortmid;' => '???',
  'nshortparallel;' => '???',
  'nsim;' => '???',
  'nsime;' => '???',
  'nsimeq;' => '???',
  'nsmid;' => '???',
  'nspar;' => '???',
  'nsqsube;' => '???',
  'nsqsupe;' => '???',
  'nsub;' => '???',
  'nsubE;' => '?????',
  'nsube;' => '???',
  'nsubset;' => '??????',
  'nsubseteq;' => '???',
  'nsubseteqq;' => '?????',
  'nsucc;' => '???',
  'nsucceq;' => '?????',
  'nsup;' => '???',
  'nsupE;' => '?????',
  'nsupe;' => '???',
  'nsupset;' => '??????',
  'nsupseteq;' => '???',
  'nsupseteqq;' => '?????',
  'ntgl;' => '???',
  'Ntilde;' => '??',
  'Ntilde' => '??',
  'ntilde;' => '??',
  'ntilde' => '??',
  'ntlg;' => '???',
  'ntriangleleft;' => '???',
  'ntrianglelefteq;' => '???',
  'ntriangleright;' => '???',
  'ntrianglerighteq;' => '???',
  'Nu;' => '??',
  'nu;' => '??',
  'num;' => '#',
  'numero;' => '???',
  'numsp;' => '???',
  'nvap;' => '??????',
  'nvdash;' => '???',
  'nvDash;' => '???',
  'nVdash;' => '???',
  'nVDash;' => '???',
  'nvge;' => '??????',
  'nvgt;' => '>???',
  'nvHarr;' => '???',
  'nvinfin;' => '???',
  'nvlArr;' => '???',
  'nvle;' => '??????',
  'nvlt;' => '<???',
  'nvltrie;' => '??????',
  'nvrArr;' => '???',
  'nvrtrie;' => '??????',
  'nvsim;' => '??????',
  'nwarhk;' => '???',
  'nwarr;' => '???',
  'nwArr;' => '???',
  'nwarrow;' => '???',
  'nwnear;' => '???',
  'Oacute;' => '??',
  'Oacute' => '??',
  'oacute;' => '??',
  'oacute' => '??',
  'oast;' => '???',
  'Ocirc;' => '??',
  'Ocirc' => '??',
  'ocirc;' => '??',
  'ocirc' => '??',
  'ocir;' => '???',
  'Ocy;' => '??',
  'ocy;' => '??',
  'odash;' => '???',
  'Odblac;' => '??',
  'odblac;' => '??',
  'odiv;' => '???',
  'odot;' => '???',
  'odsold;' => '???',
  'OElig;' => '??',
  'oelig;' => '??',
  'ofcir;' => '???',
  'Ofr;' => '????',
  'ofr;' => '????',
  'ogon;' => '??',
  'Ograve;' => '??',
  'Ograve' => '??',
  'ograve;' => '??',
  'ograve' => '??',
  'ogt;' => '???',
  'ohbar;' => '???',
  'ohm;' => '??',
  'oint;' => '???',
  'olarr;' => '???',
  'olcir;' => '???',
  'olcross;' => '???',
  'oline;' => '???',
  'olt;' => '???',
  'Omacr;' => '??',
  'omacr;' => '??',
  'Omega;' => '??',
  'omega;' => '??',
  'Omicron;' => '??',
  'omicron;' => '??',
  'omid;' => '???',
  'ominus;' => '???',
  'Oopf;' => '????',
  'oopf;' => '????',
  'opar;' => '???',
  'OpenCurlyDoubleQuote;' => '???',
  'OpenCurlyQuote;' => '???',
  'operp;' => '???',
  'oplus;' => '???',
  'orarr;' => '???',
  'Or;' => '???',
  'or;' => '???',
  'ord;' => '???',
  'order;' => '???',
  'orderof;' => '???',
  'ordf;' => '??',
  'ordf' => '??',
  'ordm;' => '??',
  'ordm' => '??',
  'origof;' => '???',
  'oror;' => '???',
  'orslope;' => '???',
  'orv;' => '???',
  'oS;' => '???',
  'Oscr;' => '????',
  'oscr;' => '???',
  'Oslash;' => '??',
  'Oslash' => '??',
  'oslash;' => '??',
  'oslash' => '??',
  'osol;' => '???',
  'Otilde;' => '??',
  'Otilde' => '??',
  'otilde;' => '??',
  'otilde' => '??',
  'otimesas;' => '???',
  'Otimes;' => '???',
  'otimes;' => '???',
  'Ouml;' => '??',
  'Ouml' => '??',
  'ouml;' => '??',
  'ouml' => '??',
  'ovbar;' => '???',
  'OverBar;' => '???',
  'OverBrace;' => '???',
  'OverBracket;' => '???',
  'OverParenthesis;' => '???',
  'para;' => '??',
  'para' => '??',
  'parallel;' => '???',
  'par;' => '???',
  'parsim;' => '???',
  'parsl;' => '???',
  'part;' => '???',
  'PartialD;' => '???',
  'Pcy;' => '??',
  'pcy;' => '??',
  'percnt;' => '%',
  'period;' => '.',
  'permil;' => '???',
  'perp;' => '???',
  'pertenk;' => '???',
  'Pfr;' => '????',
  'pfr;' => '????',
  'Phi;' => '??',
  'phi;' => '??',
  'phiv;' => '??',
  'phmmat;' => '???',
  'phone;' => '???',
  'Pi;' => '??',
  'pi;' => '??',
  'pitchfork;' => '???',
  'piv;' => '??',
  'planck;' => '???',
  'planckh;' => '???',
  'plankv;' => '???',
  'plusacir;' => '???',
  'plusb;' => '???',
  'pluscir;' => '???',
  'plus;' => '+',
  'plusdo;' => '???',
  'plusdu;' => '???',
  'pluse;' => '???',
  'PlusMinus;' => '??',
  'plusmn;' => '??',
  'plusmn' => '??',
  'plussim;' => '???',
  'plustwo;' => '???',
  'pm;' => '??',
  'Poincareplane;' => '???',
  'pointint;' => '???',
  'popf;' => '????',
  'Popf;' => '???',
  'pound;' => '??',
  'pound' => '??',
  'prap;' => '???',
  'Pr;' => '???',
  'pr;' => '???',
  'prcue;' => '???',
  'precapprox;' => '???',
  'prec;' => '???',
  'preccurlyeq;' => '???',
  'Precedes;' => '???',
  'PrecedesEqual;' => '???',
  'PrecedesSlantEqual;' => '???',
  'PrecedesTilde;' => '???',
  'preceq;' => '???',
  'precnapprox;' => '???',
  'precneqq;' => '???',
  'precnsim;' => '???',
  'pre;' => '???',
  'prE;' => '???',
  'precsim;' => '???',
  'prime;' => '???',
  'Prime;' => '???',
  'primes;' => '???',
  'prnap;' => '???',
  'prnE;' => '???',
  'prnsim;' => '???',
  'prod;' => '???',
  'Product;' => '???',
  'profalar;' => '???',
  'profline;' => '???',
  'profsurf;' => '???',
  'prop;' => '???',
  'Proportional;' => '???',
  'Proportion;' => '???',
  'propto;' => '???',
  'prsim;' => '???',
  'prurel;' => '???',
  'Pscr;' => '????',
  'pscr;' => '????',
  'Psi;' => '??',
  'psi;' => '??',
  'puncsp;' => '???',
  'Qfr;' => '????',
  'qfr;' => '????',
  'qint;' => '???',
  'qopf;' => '????',
  'Qopf;' => '???',
  'qprime;' => '???',
  'Qscr;' => '????',
  'qscr;' => '????',
  'quaternions;' => '???',
  'quatint;' => '???',
  'quest;' => '?',
  'questeq;' => '???',
  'quot;' => '"',
  'quot' => '"',
  'QUOT;' => '"',
  'QUOT' => '"',
  'rAarr;' => '???',
  'race;' => '?????',
  'Racute;' => '??',
  'racute;' => '??',
  'radic;' => '???',
  'raemptyv;' => '???',
  'rang;' => '???',
  'Rang;' => '???',
  'rangd;' => '???',
  'range;' => '???',
  'rangle;' => '???',
  'raquo;' => '??',
  'raquo' => '??',
  'rarrap;' => '???',
  'rarrb;' => '???',
  'rarrbfs;' => '???',
  'rarrc;' => '???',
  'rarr;' => '???',
  'Rarr;' => '???',
  'rArr;' => '???',
  'rarrfs;' => '???',
  'rarrhk;' => '???',
  'rarrlp;' => '???',
  'rarrpl;' => '???',
  'rarrsim;' => '???',
  'Rarrtl;' => '???',
  'rarrtl;' => '???',
  'rarrw;' => '???',
  'ratail;' => '???',
  'rAtail;' => '???',
  'ratio;' => '???',
  'rationals;' => '???',
  'rbarr;' => '???',
  'rBarr;' => '???',
  'RBarr;' => '???',
  'rbbrk;' => '???',
  'rbrace;' => '}',
  'rbrack;' => ']',
  'rbrke;' => '???',
  'rbrksld;' => '???',
  'rbrkslu;' => '???',
  'Rcaron;' => '??',
  'rcaron;' => '??',
  'Rcedil;' => '??',
  'rcedil;' => '??',
  'rceil;' => '???',
  'rcub;' => '}',
  'Rcy;' => '??',
  'rcy;' => '??',
  'rdca;' => '???',
  'rdldhar;' => '???',
  'rdquo;' => '???',
  'rdquor;' => '???',
  'rdsh;' => '???',
  'real;' => '???',
  'realine;' => '???',
  'realpart;' => '???',
  'reals;' => '???',
  'Re;' => '???',
  'rect;' => '???',
  'reg;' => '??',
  'reg' => '??',
  'REG;' => '??',
  'REG' => '??',
  'ReverseElement;' => '???',
  'ReverseEquilibrium;' => '???',
  'ReverseUpEquilibrium;' => '???',
  'rfisht;' => '???',
  'rfloor;' => '???',
  'rfr;' => '????',
  'Rfr;' => '???',
  'rHar;' => '???',
  'rhard;' => '???',
  'rharu;' => '???',
  'rharul;' => '???',
  'Rho;' => '??',
  'rho;' => '??',
  'rhov;' => '??',
  'RightAngleBracket;' => '???',
  'RightArrowBar;' => '???',
  'rightarrow;' => '???',
  'RightArrow;' => '???',
  'Rightarrow;' => '???',
  'RightArrowLeftArrow;' => '???',
  'rightarrowtail;' => '???',
  'RightCeiling;' => '???',
  'RightDoubleBracket;' => '???',
  'RightDownTeeVector;' => '???',
  'RightDownVectorBar;' => '???',
  'RightDownVector;' => '???',
  'RightFloor;' => '???',
  'rightharpoondown;' => '???',
  'rightharpoonup;' => '???',
  'rightleftarrows;' => '???',
  'rightleftharpoons;' => '???',
  'rightrightarrows;' => '???',
  'rightsquigarrow;' => '???',
  'RightTeeArrow;' => '???',
  'RightTee;' => '???',
  'RightTeeVector;' => '???',
  'rightthreetimes;' => '???',
  'RightTriangleBar;' => '???',
  'RightTriangle;' => '???',
  'RightTriangleEqual;' => '???',
  'RightUpDownVector;' => '???',
  'RightUpTeeVector;' => '???',
  'RightUpVectorBar;' => '???',
  'RightUpVector;' => '???',
  'RightVectorBar;' => '???',
  'RightVector;' => '???',
  'ring;' => '??',
  'risingdotseq;' => '???',
  'rlarr;' => '???',
  'rlhar;' => '???',
  'rlm;' => '???',
  'rmoustache;' => '???',
  'rmoust;' => '???',
  'rnmid;' => '???',
  'roang;' => '???',
  'roarr;' => '???',
  'robrk;' => '???',
  'ropar;' => '???',
  'ropf;' => '????',
  'Ropf;' => '???',
  'roplus;' => '???',
  'rotimes;' => '???',
  'RoundImplies;' => '???',
  'rpar;' => ')',
  'rpargt;' => '???',
  'rppolint;' => '???',
  'rrarr;' => '???',
  'Rrightarrow;' => '???',
  'rsaquo;' => '???',
  'rscr;' => '????',
  'Rscr;' => '???',
  'rsh;' => '???',
  'Rsh;' => '???',
  'rsqb;' => ']',
  'rsquo;' => '???',
  'rsquor;' => '???',
  'rthree;' => '???',
  'rtimes;' => '???',
  'rtri;' => '???',
  'rtrie;' => '???',
  'rtrif;' => '???',
  'rtriltri;' => '???',
  'RuleDelayed;' => '???',
  'ruluhar;' => '???',
  'rx;' => '???',
  'Sacute;' => '??',
  'sacute;' => '??',
  'sbquo;' => '???',
  'scap;' => '???',
  'Scaron;' => '??',
  'scaron;' => '??',
  'Sc;' => '???',
  'sc;' => '???',
  'sccue;' => '???',
  'sce;' => '???',
  'scE;' => '???',
  'Scedil;' => '??',
  'scedil;' => '??',
  'Scirc;' => '??',
  'scirc;' => '??',
  'scnap;' => '???',
  'scnE;' => '???',
  'scnsim;' => '???',
  'scpolint;' => '???',
  'scsim;' => '???',
  'Scy;' => '??',
  'scy;' => '??',
  'sdotb;' => '???',
  'sdot;' => '???',
  'sdote;' => '???',
  'searhk;' => '???',
  'searr;' => '???',
  'seArr;' => '???',
  'searrow;' => '???',
  'sect;' => '??',
  'sect' => '??',
  'semi;' => ';',
  'seswar;' => '???',
  'setminus;' => '???',
  'setmn;' => '???',
  'sext;' => '???',
  'Sfr;' => '????',
  'sfr;' => '????',
  'sfrown;' => '???',
  'sharp;' => '???',
  'SHCHcy;' => '??',
  'shchcy;' => '??',
  'SHcy;' => '??',
  'shcy;' => '??',
  'ShortDownArrow;' => '???',
  'ShortLeftArrow;' => '???',
  'shortmid;' => '???',
  'shortparallel;' => '???',
  'ShortRightArrow;' => '???',
  'ShortUpArrow;' => '???',
  'shy;' => '??',
  'shy' => '??',
  'Sigma;' => '??',
  'sigma;' => '??',
  'sigmaf;' => '??',
  'sigmav;' => '??',
  'sim;' => '???',
  'simdot;' => '???',
  'sime;' => '???',
  'simeq;' => '???',
  'simg;' => '???',
  'simgE;' => '???',
  'siml;' => '???',
  'simlE;' => '???',
  'simne;' => '???',
  'simplus;' => '???',
  'simrarr;' => '???',
  'slarr;' => '???',
  'SmallCircle;' => '???',
  'smallsetminus;' => '???',
  'smashp;' => '???',
  'smeparsl;' => '???',
  'smid;' => '???',
  'smile;' => '???',
  'smt;' => '???',
  'smte;' => '???',
  'smtes;' => '??????',
  'SOFTcy;' => '??',
  'softcy;' => '??',
  'solbar;' => '???',
  'solb;' => '???',
  'sol;' => '/',
  'Sopf;' => '????',
  'sopf;' => '????',
  'spades;' => '???',
  'spadesuit;' => '???',
  'spar;' => '???',
  'sqcap;' => '???',
  'sqcaps;' => '??????',
  'sqcup;' => '???',
  'sqcups;' => '??????',
  'Sqrt;' => '???',
  'sqsub;' => '???',
  'sqsube;' => '???',
  'sqsubset;' => '???',
  'sqsubseteq;' => '???',
  'sqsup;' => '???',
  'sqsupe;' => '???',
  'sqsupset;' => '???',
  'sqsupseteq;' => '???',
  'square;' => '???',
  'Square;' => '???',
  'SquareIntersection;' => '???',
  'SquareSubset;' => '???',
  'SquareSubsetEqual;' => '???',
  'SquareSuperset;' => '???',
  'SquareSupersetEqual;' => '???',
  'SquareUnion;' => '???',
  'squarf;' => '???',
  'squ;' => '???',
  'squf;' => '???',
  'srarr;' => '???',
  'Sscr;' => '????',
  'sscr;' => '????',
  'ssetmn;' => '???',
  'ssmile;' => '???',
  'sstarf;' => '???',
  'Star;' => '???',
  'star;' => '???',
  'starf;' => '???',
  'straightepsilon;' => '??',
  'straightphi;' => '??',
  'strns;' => '??',
  'sub;' => '???',
  'Sub;' => '???',
  'subdot;' => '???',
  'subE;' => '???',
  'sube;' => '???',
  'subedot;' => '???',
  'submult;' => '???',
  'subnE;' => '???',
  'subne;' => '???',
  'subplus;' => '???',
  'subrarr;' => '???',
  'subset;' => '???',
  'Subset;' => '???',
  'subseteq;' => '???',
  'subseteqq;' => '???',
  'SubsetEqual;' => '???',
  'subsetneq;' => '???',
  'subsetneqq;' => '???',
  'subsim;' => '???',
  'subsub;' => '???',
  'subsup;' => '???',
  'succapprox;' => '???',
  'succ;' => '???',
  'succcurlyeq;' => '???',
  'Succeeds;' => '???',
  'SucceedsEqual;' => '???',
  'SucceedsSlantEqual;' => '???',
  'SucceedsTilde;' => '???',
  'succeq;' => '???',
  'succnapprox;' => '???',
  'succneqq;' => '???',
  'succnsim;' => '???',
  'succsim;' => '???',
  'SuchThat;' => '???',
  'sum;' => '???',
  'Sum;' => '???',
  'sung;' => '???',
  'sup1;' => '??',
  'sup1' => '??',
  'sup2;' => '??',
  'sup2' => '??',
  'sup3;' => '??',
  'sup3' => '??',
  'sup;' => '???',
  'Sup;' => '???',
  'supdot;' => '???',
  'supdsub;' => '???',
  'supE;' => '???',
  'supe;' => '???',
  'supedot;' => '???',
  'Superset;' => '???',
  'SupersetEqual;' => '???',
  'suphsol;' => '???',
  'suphsub;' => '???',
  'suplarr;' => '???',
  'supmult;' => '???',
  'supnE;' => '???',
  'supne;' => '???',
  'supplus;' => '???',
  'supset;' => '???',
  'Supset;' => '???',
  'supseteq;' => '???',
  'supseteqq;' => '???',
  'supsetneq;' => '???',
  'supsetneqq;' => '???',
  'supsim;' => '???',
  'supsub;' => '???',
  'supsup;' => '???',
  'swarhk;' => '???',
  'swarr;' => '???',
  'swArr;' => '???',
  'swarrow;' => '???',
  'swnwar;' => '???',
  'szlig;' => '??',
  'szlig' => '??',
  'Tab;' => '	',
  'target;' => '???',
  'Tau;' => '??',
  'tau;' => '??',
  'tbrk;' => '???',
  'Tcaron;' => '??',
  'tcaron;' => '??',
  'Tcedil;' => '??',
  'tcedil;' => '??',
  'Tcy;' => '??',
  'tcy;' => '??',
  'tdot;' => '???',
  'telrec;' => '???',
  'Tfr;' => '????',
  'tfr;' => '????',
  'there4;' => '???',
  'therefore;' => '???',
  'Therefore;' => '???',
  'Theta;' => '??',
  'theta;' => '??',
  'thetasym;' => '??',
  'thetav;' => '??',
  'thickapprox;' => '???',
  'thicksim;' => '???',
  'ThickSpace;' => '??????',
  'ThinSpace;' => '???',
  'thinsp;' => '???',
  'thkap;' => '???',
  'thksim;' => '???',
  'THORN;' => '??',
  'THORN' => '??',
  'thorn;' => '??',
  'thorn' => '??',
  'tilde;' => '??',
  'Tilde;' => '???',
  'TildeEqual;' => '???',
  'TildeFullEqual;' => '???',
  'TildeTilde;' => '???',
  'timesbar;' => '???',
  'timesb;' => '???',
  'times;' => '??',
  'times' => '??',
  'timesd;' => '???',
  'tint;' => '???',
  'toea;' => '???',
  'topbot;' => '???',
  'topcir;' => '???',
  'top;' => '???',
  'Topf;' => '????',
  'topf;' => '????',
  'topfork;' => '???',
  'tosa;' => '???',
  'tprime;' => '???',
  'trade;' => '???',
  'TRADE;' => '???',
  'triangle;' => '???',
  'triangledown;' => '???',
  'triangleleft;' => '???',
  'trianglelefteq;' => '???',
  'triangleq;' => '???',
  'triangleright;' => '???',
  'trianglerighteq;' => '???',
  'tridot;' => '???',
  'trie;' => '???',
  'triminus;' => '???',
  'TripleDot;' => '???',
  'triplus;' => '???',
  'trisb;' => '???',
  'tritime;' => '???',
  'trpezium;' => '???',
  'Tscr;' => '????',
  'tscr;' => '????',
  'TScy;' => '??',
  'tscy;' => '??',
  'TSHcy;' => '??',
  'tshcy;' => '??',
  'Tstrok;' => '??',
  'tstrok;' => '??',
  'twixt;' => '???',
  'twoheadleftarrow;' => '???',
  'twoheadrightarrow;' => '???',
  'Uacute;' => '??',
  'Uacute' => '??',
  'uacute;' => '??',
  'uacute' => '??',
  'uarr;' => '???',
  'Uarr;' => '???',
  'uArr;' => '???',
  'Uarrocir;' => '???',
  'Ubrcy;' => '??',
  'ubrcy;' => '??',
  'Ubreve;' => '??',
  'ubreve;' => '??',
  'Ucirc;' => '??',
  'Ucirc' => '??',
  'ucirc;' => '??',
  'ucirc' => '??',
  'Ucy;' => '??',
  'ucy;' => '??',
  'udarr;' => '???',
  'Udblac;' => '??',
  'udblac;' => '??',
  'udhar;' => '???',
  'ufisht;' => '???',
  'Ufr;' => '????',
  'ufr;' => '????',
  'Ugrave;' => '??',
  'Ugrave' => '??',
  'ugrave;' => '??',
  'ugrave' => '??',
  'uHar;' => '???',
  'uharl;' => '???',
  'uharr;' => '???',
  'uhblk;' => '???',
  'ulcorn;' => '???',
  'ulcorner;' => '???',
  'ulcrop;' => '???',
  'ultri;' => '???',
  'Umacr;' => '??',
  'umacr;' => '??',
  'uml;' => '??',
  'uml' => '??',
  'UnderBar;' => '_',
  'UnderBrace;' => '???',
  'UnderBracket;' => '???',
  'UnderParenthesis;' => '???',
  'Union;' => '???',
  'UnionPlus;' => '???',
  'Uogon;' => '??',
  'uogon;' => '??',
  'Uopf;' => '????',
  'uopf;' => '????',
  'UpArrowBar;' => '???',
  'uparrow;' => '???',
  'UpArrow;' => '???',
  'Uparrow;' => '???',
  'UpArrowDownArrow;' => '???',
  'updownarrow;' => '???',
  'UpDownArrow;' => '???',
  'Updownarrow;' => '???',
  'UpEquilibrium;' => '???',
  'upharpoonleft;' => '???',
  'upharpoonright;' => '???',
  'uplus;' => '???',
  'UpperLeftArrow;' => '???',
  'UpperRightArrow;' => '???',
  'upsi;' => '??',
  'Upsi;' => '??',
  'upsih;' => '??',
  'Upsilon;' => '??',
  'upsilon;' => '??',
  'UpTeeArrow;' => '???',
  'UpTee;' => '???',
  'upuparrows;' => '???',
  'urcorn;' => '???',
  'urcorner;' => '???',
  'urcrop;' => '???',
  'Uring;' => '??',
  'uring;' => '??',
  'urtri;' => '???',
  'Uscr;' => '????',
  'uscr;' => '????',
  'utdot;' => '???',
  'Utilde;' => '??',
  'utilde;' => '??',
  'utri;' => '???',
  'utrif;' => '???',
  'uuarr;' => '???',
  'Uuml;' => '??',
  'Uuml' => '??',
  'uuml;' => '??',
  'uuml' => '??',
  'uwangle;' => '???',
  'vangrt;' => '???',
  'varepsilon;' => '??',
  'varkappa;' => '??',
  'varnothing;' => '???',
  'varphi;' => '??',
  'varpi;' => '??',
  'varpropto;' => '???',
  'varr;' => '???',
  'vArr;' => '???',
  'varrho;' => '??',
  'varsigma;' => '??',
  'varsubsetneq;' => '??????',
  'varsubsetneqq;' => '??????',
  'varsupsetneq;' => '??????',
  'varsupsetneqq;' => '??????',
  'vartheta;' => '??',
  'vartriangleleft;' => '???',
  'vartriangleright;' => '???',
  'vBar;' => '???',
  'Vbar;' => '???',
  'vBarv;' => '???',
  'Vcy;' => '??',
  'vcy;' => '??',
  'vdash;' => '???',
  'vDash;' => '???',
  'Vdash;' => '???',
  'VDash;' => '???',
  'Vdashl;' => '???',
  'veebar;' => '???',
  'vee;' => '???',
  'Vee;' => '???',
  'veeeq;' => '???',
  'vellip;' => '???',
  'verbar;' => '|',
  'Verbar;' => '???',
  'vert;' => '|',
  'Vert;' => '???',
  'VerticalBar;' => '???',
  'VerticalLine;' => '|',
  'VerticalSeparator;' => '???',
  'VerticalTilde;' => '???',
  'VeryThinSpace;' => '???',
  'Vfr;' => '????',
  'vfr;' => '????',
  'vltri;' => '???',
  'vnsub;' => '??????',
  'vnsup;' => '??????',
  'Vopf;' => '????',
  'vopf;' => '????',
  'vprop;' => '???',
  'vrtri;' => '???',
  'Vscr;' => '????',
  'vscr;' => '????',
  'vsubnE;' => '??????',
  'vsubne;' => '??????',
  'vsupnE;' => '??????',
  'vsupne;' => '??????',
  'Vvdash;' => '???',
  'vzigzag;' => '???',
  'Wcirc;' => '??',
  'wcirc;' => '??',
  'wedbar;' => '???',
  'wedge;' => '???',
  'Wedge;' => '???',
  'wedgeq;' => '???',
  'weierp;' => '???',
  'Wfr;' => '????',
  'wfr;' => '????',
  'Wopf;' => '????',
  'wopf;' => '????',
  'wp;' => '???',
  'wr;' => '???',
  'wreath;' => '???',
  'Wscr;' => '????',
  'wscr;' => '????',
  'xcap;' => '???',
  'xcirc;' => '???',
  'xcup;' => '???',
  'xdtri;' => '???',
  'Xfr;' => '????',
  'xfr;' => '????',
  'xharr;' => '???',
  'xhArr;' => '???',
  'Xi;' => '??',
  'xi;' => '??',
  'xlarr;' => '???',
  'xlArr;' => '???',
  'xmap;' => '???',
  'xnis;' => '???',
  'xodot;' => '???',
  'Xopf;' => '????',
  'xopf;' => '????',
  'xoplus;' => '???',
  'xotime;' => '???',
  'xrarr;' => '???',
  'xrArr;' => '???',
  'Xscr;' => '????',
  'xscr;' => '????',
  'xsqcup;' => '???',
  'xuplus;' => '???',
  'xutri;' => '???',
  'xvee;' => '???',
  'xwedge;' => '???',
  'Yacute;' => '??',
  'Yacute' => '??',
  'yacute;' => '??',
  'yacute' => '??',
  'YAcy;' => '??',
  'yacy;' => '??',
  'Ycirc;' => '??',
  'ycirc;' => '??',
  'Ycy;' => '??',
  'ycy;' => '??',
  'yen;' => '??',
  'yen' => '??',
  'Yfr;' => '????',
  'yfr;' => '????',
  'YIcy;' => '??',
  'yicy;' => '??',
  'Yopf;' => '????',
  'yopf;' => '????',
  'Yscr;' => '????',
  'yscr;' => '????',
  'YUcy;' => '??',
  'yucy;' => '??',
  'yuml;' => '??',
  'yuml' => '??',
  'Yuml;' => '??',
  'Zacute;' => '??',
  'zacute;' => '??',
  'Zcaron;' => '??',
  'zcaron;' => '??',
  'Zcy;' => '??',
  'zcy;' => '??',
  'Zdot;' => '??',
  'zdot;' => '??',
  'zeetrf;' => '???',
  'ZeroWidthSpace;' => '???',
  'Zeta;' => '??',
  'zeta;' => '??',
  'zfr;' => '????',
  'Zfr;' => '???',
  'ZHcy;' => '??',
  'zhcy;' => '??',
  'zigrarr;' => '???',
  'zopf;' => '????',
  'Zopf;' => '???',
  'Zscr;' => '????',
  'zscr;' => '????',
  'zwj;' => '???',
  'zwnj;' => '???',
);
	static public $legacyNumericEntities = array (
  0 => '???',
  128 => '???',
  130 => '???',
  131 => '??',
  132 => '???',
  133 => '???',
  134 => '???',
  135 => '???',
  136 => '??',
  137 => '???',
  138 => '??',
  139 => '???',
  140 => '??',
  142 => '??',
  145 => '???',
  146 => '???',
  147 => '???',
  148 => '???',
  149 => '???',
  150 => '???',
  151 => '???',
  152 => '??',
  153 => '???',
  154 => '??',
  155 => '???',
  156 => '??',
  158 => '??',
  159 => '??',
);
	static public $quirkyPrefixRegex = '~
		//Silmaril//dtd html Pro v0r11 19970101//|
		//AS//DTD HTML 3\\.0 asWedit \\+ extensions//|
		//AdvaSoft Ltd//DTD HTML 3\\.0 asWedit \\+ extensions//|
		//IETF//DTD HTML 2\\.0 Level 1//|
		//IETF//DTD HTML 2\\.0 Level 2//|
		//IETF//DTD HTML 2\\.0 Strict Level 1//|
		//IETF//DTD HTML 2\\.0 Strict Level 2//|
		//IETF//DTD HTML 2\\.0 Strict//|
		//IETF//DTD HTML 2\\.0//|
		//IETF//DTD HTML 2\\.1E//|
		//IETF//DTD HTML 3\\.0//|
		//IETF//DTD HTML 3\\.2 Final//|
		//IETF//DTD HTML 3\\.2//|
		//IETF//DTD HTML 3//|
		//IETF//DTD HTML Level 0//|
		//IETF//DTD HTML Level 1//|
		//IETF//DTD HTML Level 2//|
		//IETF//DTD HTML Level 3//|
		//IETF//DTD HTML Strict Level 0//|
		//IETF//DTD HTML Strict Level 1//|
		//IETF//DTD HTML Strict Level 2//|
		//IETF//DTD HTML Strict Level 3//|
		//IETF//DTD HTML Strict//|
		//IETF//DTD HTML//|
		//Metrius//DTD Metrius Presentational//|
		//Microsoft//DTD Internet Explorer 2\\.0 HTML Strict//|
		//Microsoft//DTD Internet Explorer 2\\.0 HTML//|
		//Microsoft//DTD Internet Explorer 2\\.0 Tables//|
		//Microsoft//DTD Internet Explorer 3\\.0 HTML Strict//|
		//Microsoft//DTD Internet Explorer 3\\.0 HTML//|
		//Microsoft//DTD Internet Explorer 3\\.0 Tables//|
		//Netscape Comm\\. Corp\\.//DTD HTML//|
		//Netscape Comm\\. Corp\\.//DTD Strict HTML//|
		//O\'Reilly and Associates//DTD HTML 2\\.0//|
		//O\'Reilly and Associates//DTD HTML Extended 1\\.0//|
		//O\'Reilly and Associates//DTD HTML Extended Relaxed 1\\.0//|
		//SoftQuad Software//DTD HoTMetaL PRO 6\\.0\\:\\:19990601\\:\\:extensions to HTML 4\\.0//|
		//SoftQuad//DTD HoTMetaL PRO 4\\.0\\:\\:19971010\\:\\:extensions to HTML 4\\.0//|
		//Spyglass//DTD HTML 2\\.0 Extended//|
		//SQ//DTD HTML 2\\.0 HoTMetaL \\+ extensions//|
		//Sun Microsystems Corp\\.//DTD HotJava HTML//|
		//Sun Microsystems Corp\\.//DTD HotJava Strict HTML//|
		//W3C//DTD HTML 3 1995\\-03\\-24//|
		//W3C//DTD HTML 3\\.2 Draft//|
		//W3C//DTD HTML 3\\.2 Final//|
		//W3C//DTD HTML 3\\.2//|
		//W3C//DTD HTML 3\\.2S Draft//|
		//W3C//DTD HTML 4\\.0 Frameset//|
		//W3C//DTD HTML 4\\.0 Transitional//|
		//W3C//DTD HTML Experimental 19960712//|
		//W3C//DTD HTML Experimental 970421//|
		//W3C//DTD W3 HTML//|
		//W3O//DTD W3 HTML 3\\.0//|
		//WebTechs//DTD Mozilla HTML 2\\.0//|
		//WebTechs//DTD Mozilla HTML//~xAi';
	static public $nameStartCharConvTable = [
		0, 64, 0, 16777215,
		91, 94, 0, 16777215,
		96, 96, 0, 16777215,
		123, 191, 0, 16777215,
		215, 215, 0, 16777215,
		247, 247, 0, 16777215,
		768, 879, 0, 16777215,
		894, 894, 0, 16777215,
		8192, 8203, 0, 16777215,
		8206, 8303, 0, 16777215,
		8592, 11263, 0, 16777215,
		12272, 12288, 0, 16777215,
		55296, 63743, 0, 16777215,
		64976, 65007, 0, 16777215,
		65534, 65535, 0, 16777215,
		983040, 1114111, 0, 16777215 ];
	static public $nameCharConvTable = [
		0, 44, 0, 16777215,
		47, 47, 0, 16777215,
		58, 64, 0, 16777215,
		91, 94, 0, 16777215,
		96, 96, 0, 16777215,
		123, 182, 0, 16777215,
		184, 191, 0, 16777215,
		215, 215, 0, 16777215,
		247, 247, 0, 16777215,
		894, 894, 0, 16777215,
		8192, 8203, 0, 16777215,
		8206, 8254, 0, 16777215,
		8257, 8303, 0, 16777215,
		8592, 11263, 0, 16777215,
		12272, 12288, 0, 16777215,
		55296, 63743, 0, 16777215,
		64976, 65007, 0, 16777215,
		65534, 65535, 0, 16777215,
		983040, 1114111, 0, 16777215 ];
}
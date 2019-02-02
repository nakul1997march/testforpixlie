using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Apppro
{
    #region Avtar
    public class Avtar
    {
        #region Member Variables
        protected int _callno;
        protected string _avtr;
        protected int _score_ofavtar;
        protected string _st_avtar;
        protected string _avtr;
        protected int _score_ofavtar;
        protected string _st_avtar;
        protected int _winner_score;
        #endregion
        #region Constructors
        public Avtar() { }
        public Avtar(string avtr, int score_ofavtar, string st_avtar, string avtr, int score_ofavtar, string st_avtar, int winner_score)
        {
            this._avtr=avtr;
            this._score_ofavtar=score_ofavtar;
            this._st_avtar=st_avtar;
            this._avtr=avtr;
            this._score_ofavtar=score_ofavtar;
            this._st_avtar=st_avtar;
            this._winner_score=winner_score;
        }
        #endregion
        #region Public Properties
        public virtual int Callno
        {
            get {return _callno;}
            set {_callno=value;}
        }
        public virtual string Avtr
        {
            get {return _avtr;}
            set {_avtr=value;}
        }
        public virtual int Score_ofavtar
        {
            get {return _score_ofavtar;}
            set {_score_ofavtar=value;}
        }
        public virtual string St_avtar
        {
            get {return _st_avtar;}
            set {_st_avtar=value;}
        }
        public virtual string Avtr
        {
            get {return _avtr;}
            set {_avtr=value;}
        }
        public virtual int Score_ofavtar
        {
            get {return _score_ofavtar;}
            set {_score_ofavtar=value;}
        }
        public virtual string St_avtar
        {
            get {return _st_avtar;}
            set {_st_avtar=value;}
        }
        public virtual int Winner_score
        {
            get {return _winner_score;}
            set {_winner_score=value;}
        }
        #endregion
    }
    #endregion
}
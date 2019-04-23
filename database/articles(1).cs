using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Articles
    public class Articles
    {
        #region Member Variables
        protected int _id_article;
        protected int _id_user_send;
        protected string _domaine;
        protected string _nom_structure;
        protected string _article;
        protected unknown _date_ajout_article;
        protected int _nombre_place;
        protected string _type_emploi;
        protected string _contact;
        protected int _likes;
        protected string _photo_article;
        protected string _lieu_travail;
        protected unknown _date_debut;
        protected unknown _date_fin;
        #endregion
        #region Constructors
        public Articles() { }
        public Articles(int id_user_send, string domaine, string nom_structure, string article, unknown date_ajout_article, int nombre_place, string type_emploi, string contact, int likes, string photo_article, string lieu_travail, unknown date_debut, unknown date_fin)
        {
            this._id_user_send=id_user_send;
            this._domaine=domaine;
            this._nom_structure=nom_structure;
            this._article=article;
            this._date_ajout_article=date_ajout_article;
            this._nombre_place=nombre_place;
            this._type_emploi=type_emploi;
            this._contact=contact;
            this._likes=likes;
            this._photo_article=photo_article;
            this._lieu_travail=lieu_travail;
            this._date_debut=date_debut;
            this._date_fin=date_fin;
        }
        #endregion
        #region Public Properties
        public virtual int Id_article
        {
            get {return _id_article;}
            set {_id_article=value;}
        }
        public virtual int Id_user_send
        {
            get {return _id_user_send;}
            set {_id_user_send=value;}
        }
        public virtual string Domaine
        {
            get {return _domaine;}
            set {_domaine=value;}
        }
        public virtual string Nom_structure
        {
            get {return _nom_structure;}
            set {_nom_structure=value;}
        }
        public virtual string Article
        {
            get {return _article;}
            set {_article=value;}
        }
        public virtual unknown Date_ajout_article
        {
            get {return _date_ajout_article;}
            set {_date_ajout_article=value;}
        }
        public virtual int Nombre_place
        {
            get {return _nombre_place;}
            set {_nombre_place=value;}
        }
        public virtual string Type_emploi
        {
            get {return _type_emploi;}
            set {_type_emploi=value;}
        }
        public virtual string Contact
        {
            get {return _contact;}
            set {_contact=value;}
        }
        public virtual int Likes
        {
            get {return _likes;}
            set {_likes=value;}
        }
        public virtual string Photo_article
        {
            get {return _photo_article;}
            set {_photo_article=value;}
        }
        public virtual string Lieu_travail
        {
            get {return _lieu_travail;}
            set {_lieu_travail=value;}
        }
        public virtual unknown Date_debut
        {
            get {return _date_debut;}
            set {_date_debut=value;}
        }
        public virtual unknown Date_fin
        {
            get {return _date_fin;}
            set {_date_fin=value;}
        }
        #endregion
    }
    #endregion
}
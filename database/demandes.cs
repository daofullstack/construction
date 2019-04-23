using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Demandes
    public class Demandes
    {
        #region Member Variables
        protected int _id_demande;
        protected bool _etat_demande;
        protected int _id_demandeur;
        protected int _id_article;
        protected int _id_recruteur;
        protected unknown _date_ajout_demande;
        #endregion
        #region Constructors
        public Demandes() { }
        public Demandes(bool etat_demande, int id_demandeur, int id_article, int id_recruteur, unknown date_ajout_demande)
        {
            this._etat_demande=etat_demande;
            this._id_demandeur=id_demandeur;
            this._id_article=id_article;
            this._id_recruteur=id_recruteur;
            this._date_ajout_demande=date_ajout_demande;
        }
        #endregion
        #region Public Properties
        public virtual int Id_demande
        {
            get {return _id_demande;}
            set {_id_demande=value;}
        }
        public virtual bool Etat_demande
        {
            get {return _etat_demande;}
            set {_etat_demande=value;}
        }
        public virtual int Id_demandeur
        {
            get {return _id_demandeur;}
            set {_id_demandeur=value;}
        }
        public virtual int Id_article
        {
            get {return _id_article;}
            set {_id_article=value;}
        }
        public virtual int Id_recruteur
        {
            get {return _id_recruteur;}
            set {_id_recruteur=value;}
        }
        public virtual unknown Date_ajout_demande
        {
            get {return _date_ajout_demande;}
            set {_date_ajout_demande=value;}
        }
        #endregion
    }
    #endregion
}
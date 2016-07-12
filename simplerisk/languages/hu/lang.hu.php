<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d, g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Otthon',
    'RiskManagement'=>'Kockázatkezelési',
    'Reporting'=>'Jelentéstételi',
    'Configure'=>'Konfigurálja',
    'MyProfile'=>'A Profil',
    'Logout'=>'Kijelentkezési',
    'LogInHere'=>'Bejelentkezés Itt',
    'Username'=>'Felhasználónév',
    'Password'=>'Jelszó',
    'ForgotYourPassword'=>'Elfelejtettem a jelszót',
    'Login'=>'Bejelentkezés',
    'Reset'=>'Reset',
    'Send'=>'Küldeni',
    'Update'=>'Frissítés',
    'SendPasswordResetEmail'=>'Küldj Jelszó E-Mail',
    'PasswordReset'=>'Jelszó Visszaállítása',
    'ResetToken'=>'Reset Token',
    'RepeatPassword'=>'Ismételje Meg A Jelszót',
    'Submit'=>'Benyújtaniuk',
    'ProfileDetails'=>'Profil Adatait,',
    'LastLogin'=>'Utolsó Belépés',
    'ChangePassword'=>'Jelszó Módosítása',
    'CurrentPassword'=>'Jelenlegi Jelszó',
    'NewPassword'=>'Új Jelszó',
    'ConfirmPassword'=>'Jelszó Megerősítése',
    'ConfigureRiskFormula'=>'Konfigurálja Kockázat Képlet',
    'ConfigureReviewSettings'=>'A Konfigurálás Beállítások Felülvizsgálat',
    'AddAndRemoveValues'=>'A hozzáadás, illetve az Eltávolítás Értékek',
    'UserManagement'=>'Felhasználók Kezelése',
    'RedefineNamingConventions'=>'Újra Névadás',
    'AuditTrail'=>'Ellenőrzési Nyomvonal',
    'Extras'=>'Extrák',
    'Announcements'=>'Közlemények',
    'About'=>'Körülbelül',
    'Impact'=>'Hatás',
    'Likelihood'=>'Valószínűség',
    'MitigationEffort'=>'Adott Esetben Kockázatcsökkentő Erőfeszítés',
    'Change'=>'Változás',
    'to'=>'hogy',
    'AddANewUser'=>'Új Felhasználó hozzáadása',
    'Type'=>'Típus',
    'FullName'=>'Teljes Név',
    'EmailAddress'=>'E-mail Cím',
    'Teams'=>'Csapat(ok)',
    'ALL'=>'ÖSSZES',
    'NONE'=>'Egyik SEM',
    'UserResponsibilities'=>'Felhasználó Felelőssége',
    'AbleToSubmitNewRisks'=>'Képes arra, hogy nyújtson be Új Kockázatok',
    'AbleToModifyExistingRisks'=>'Módosíthatja a Meglévő Kockázatok',
    'AbleToCloseRisks'=>'Tudja, hogy Közel Kockázatok',
    'AbleToPlanMitigations'=>'Képes Terv Mitigations',
    'AbleToReviewLowRisks'=>'Képes Felülvizsgálat Alacsony Kockázat',
    'AbleToReviewMediumRisks'=>'Képes Felülvizsgálat Közepes Kockázatok',
    'AbleToReviewHighRisks'=>'Tudja, hogy vizsgálja felül a Magas Kockázatok',
    'AllowAccessToConfigureMenu'=>'Elérhetjük, hogy a "Konfigurálás" Menüben',
    'MultiFactorAuthentication'=>'Többtényezős',
    'None'=>'Egyik sem',
    'Add'=>'Add',
    'ViewDetailsForUser'=>'Adatok megtekintése a Felhasználó',
    'DetailsForUser'=>'Részletek Felhasználó',
    'Select'=>'Válassza ki a',
    'EnableAndDisableUsers'=>'Engedélyezheti vagy Letilthatja a Felhasználók',
    'EnableAndDisableUsersHelp'=>'Ez a funkció engedélyezéséhez vagy letiltásához a felhasználói bejelentkezések, miközben az ellenőrzési nyomvonal, a felhasználói tevékenységek',
    'DisableUser'=>'Felhasználói tiltása',
    'Disable'=>'Letiltása',
    'EnableUser'=>'Lehetővé teszi a felhasználó',
    'Enable'=>'Engedélyezése',
    'DeleteAnExistingUser'=>'Törölhet egy Meglévő Felhasználó',
    'DeleteCurrentUser'=>'Törölje az aktuális felhasználó',
    'Delete'=>'Törlés',
    'SendPasswordResetEmailForUser'=>'Küldj jelszó e-mail felhasználó',
    'Category'=>'Kategória',
    'AddNewCategoryNamed'=>'Új kategória neve',
    'DeleteCurrentCategoryNamed'=>'Törölje az aktuális kategória neve',
    'Team'=>'Csapat',
    'AddNewTeamNamed'=>'Új csapat neve',
    'DeleteCurrentTeamNamed'=>'Törlés jelenlegi csapat neve',
    'Technology'=>'Technológia',
    'AddNewTechnologyNamed'=>'Új technológia neve',
    'DeleteCurrentTechnologyNamed'=>'Törlés a jelenlegi technológia neve',
    'SiteLocation'=>'Helyszín/Location',
    'AddNewSiteLocationNamed'=>'Új hely/helyszín neve',
    'DeleteCurrentSiteLocationNamed'=>'Törlés jelenlegi hely/helyszín neve',
    'ControlRegulation'=>'Ellenőrzési Rendelet',
    'AddNewControlRegulationNamed'=>'Új ellenőrzési rendelet neve',
    'DeleteCurrentControlRegulationNamed'=>'Törlés a jelenlegi ellenőrzési rendelet neve',
    'RiskPlanningStrategy'=>'Kockázati Stratégia Tervezés',
    'AddNewRiskPlanningStrategyNamed'=>'Új kockázati tervezési stratégia nevű',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Törlés a jelenlegi kockázati tervezési stratégia nevű',
    'CloseReason'=>'Közel Ok',
    'AddNewCloseReasonNamed'=>'Új közel oka neve',
    'DeleteCurrentCloseReasonNamed'=>'Törlés a jelenlegi közel oka neve',
    'IWantToReviewHighRiskEvery'=>'Azt akarom, hogy vizsgálja felül a MAGAS kockázati minden',
    'IWantToReviewMediumRiskEvery'=>'Azt akarom, hogy vizsgálja felül KÖZEPES kockázat minden',
    'IWantToReviewLowRiskEvery'=>'Azt akarom, hogy vizsgálja felül ALACSONY kockázat minden',
    'days'=>'nap',
    'MyClassicRiskFormulaIs'=>'A Klasszikus Kockázati Képlet',
    'RISK'=>'KOCKÁZAT',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Úgy vélem, NAGY kockázat, hogy valami nagyobb, mint',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Úgy vélem, KÖZEPES kockázat lehet kevesebb, mint a fenti, de nagyobb, mint',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Úgy vélem, ALACSONY kockázat lehet kevesebb, mint a fenti, de nagyobb, mint',
    'HighRisk'=>'Magas Kockázat',
    'MediumRisk'=>'Közepes Kockázat',
    'LowRisk'=>'Alacsony Kockázat',
    'Irrelevant'=>'Lényegtelen',
    'SubmitYourRisks'=>'Küldje El A Kockázatok',
    'PlanYourMitigations'=>'Terv A Mitigations',
    'PerformManagementReviews'=>'Végre Vezetői Értékelés',
    'PrioritizeForProjectPlanning'=>'Rangsorolni a Projekt Tervezés',
    'ReviewRisksRegularly'=>'Felülvizsgálat Kockázatokat Rendszeresen',
    'DocumentANewRisk'=>'A dokumentum egy Új Kockázat',
    'UseThisFormHelp'=>'Használja ezt az űrlapot annak érdekében, hogy a dokumentum egy új kockázati ellenérték fejében a kockázatkezelési Folyamat',
    'Subject'=>'Tárgy',
    'ExternalReferenceId'=>'Külső Referencia-ID',
    'ControlNumber'=>'Ellenőrző Szám',
    'Owner'=>'Tulajdonos',
    'OwnersManager'=>'Tulajdonos Menedzser',
    'RiskScoringMethod'=>'Kockázat Pontozási Módszer',
    'CurrentLikelihood'=>'Jelenlegi Valószínűsége',
    'CurrentImpact'=>'Aktuális Hatás',
    'RiskAssessment'=>'Kockázatértékelés',
    'AdditionalNotes'=>'Kiegészítő Megjegyzések',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'LEJÁRT',
    'ID'=>'AZONOSÍTÓ',
    'Status'=>'Állapot',
    'Risk'=>'Kockázat',
    'DaysOpen'=>'Nap Nyitva',
    'CalculatedRisk'=>'Kiszámított Kockázat',
    'SubmittedBy'=>'Által Benyújtott,',
    'NextReviewDate'=>'Következő Felülvizsgálat Dátuma',
    'CVSSRiskScoring'=>'CVSS Kockázat Pontozás',
    'DREADRiskScoring'=>'RETTEGÉS Kockázat Pontozás',
    'OWASPRiskScoring'=>'OWASP Kockázat Pontozás',
    'CustomRiskScoring'=>'Az Egyéni Kockázati Pontozás',
    'MitigationPlanningHelp'=>'Az alábbiakban felsoroljuk a benyújtott kockázatok, amelyek megkövetelik a mérséklés tervezés',
    'ManagementReviewHelp'=>'Az alábbiakban felsoroljuk a benyújtott kockázatok, amelyek megkövetelik a vezetőségi felülvizsgálat',
    'Submitted'=>'Benyújtott',
    'MitigationPlanned'=>'Adott Esetben Kockázatcsökkentő Tervezett',
    'ManagementReview'=>'Vezetőségi Átvizsgálás',
    'No'=>'Nem',
    'Yes'=>'Igen',
    'AddAndRemoveProjects'=>'A hozzáadás, illetve az Eltávolítás Projektek',
    'AddAndRemoveProjectsHelp'=>'A hozzáadás, illetve az eltávolítás projektek annak érdekében, hogy a társult többszörös kockázatot együtt rangsorolása',
    'AddNewProjectNamed'=>'Új projekt neve',
    'DeleteCurrentProjectNamed'=>'Törölje az aktuális projekt neve',
    'AddUnassignedRisksToProjects'=>'Add Osztott Kockázatok Projektek',
    'AddUnassignedRisksToProjectsHelp'=>'Húzza át a rejtett kockázatok megjelölt ellenérték fejében, mint egy projekt a megfelelő projekt lap',
    'PrioritizeProjects'=>'Rangsorolni Projektek',
    'PrioritizeProjectsHelp'=>'Mozgás projektek körül, a sorrendet a rangsorolás. Ha kész, ne felejtsd el, hogy nyomja meg a "Frissítés" gombra a módosítások mentéséhez',
    'SaveRisksToProjects'=>'A mentés Kockázatok Projektek',
    'RiskId'=>'Kockázat ID',
    'RiskActions'=>'Kockázat Akciók',
    'ReopenRisk'=>'Újra Kockázat',
    'CloseRisk'=>'Közel Kockázat',
    'EditRisk'=>'Szerkesztés Kockázat',
    'PlanAMitigation'=>'A terv Mérséklési',
    'PerformAReview'=>'Végre egy Felülvizsgálat',
    'AddAComment'=>'Megjegyzés hozzáadása',
    'ShowRiskScoringDetails'=>'Show Kockázat Pontozás Részletek',
    'HideRiskScoringDetails'=>'Elrejteni Kockázat Pontozás Részletek',
    'Details'=>'Részletek',
    'SubmissionDate'=>'Benyújtás Dátuma',
    'DateSubmitted'=>'Benyújtás Dátuma',
    'EditDetails'=>'Adatok Szerkesztése',
    'Mitigation'=>'Adott esetben kockázatcsökkentő',
    'MitigationDate'=>'Adott Esetben Kockázatcsökkentő Dátuma',
    'PlanningStrategy'=>'Tervezés, Stratégia',
    'CurrentSolution'=>'Jelenlegi Megoldás',
    'SecurityRequirements'=>'Biztonsági Követelmények',
    'SecurityRecommendations'=>'Biztonsági Ajánlások',
    'EditMitigation'=>'Szerkesztés-Mérséklési',
    'LastReview'=>'Utolsó Ellenőrzés',
    'ReviewDate'=>'Felülvizsgálat Dátuma',
    'Reviewer'=>'Recenzens',
    'Review'=>'Felülvizsgálat',
    'NextStep'=>'Következő Lépés',
    'Comments'=>'Hozzászólások',
    'ViewAllReviews'=>'Tekintse Meg Az Összes Vélemény',
    'ReviewHistory'=>'Felülvizsgálat Történelem',
    'Comment'=>'Hozzászólás',
    'ClassicRiskScoring'=>'Klasszikus Kockázati Pontozás',
    'RiskScoringActions'=>'Kockázat Pontozás Akciók',
    'UpdateClassicScore'=>'Frissítés Klasszikus Pontszám',
    'ScoreBy'=>'Pontszám',
    'RISKClassicExp1'=>'KOCKÁZAT = ( a Valószínűsége x Hatással + 2(Hatás) )',
    'RISKClassicExp2'=>'KOCKÁZAT = ( a Valószínűsége x Hatással + Hatása )',
    'RISKClassicExp3'=>'KOCKÁZAT = ( a Valószínűsége x Hatás )',
    'RISKClassicExp4'=>'KOCKÁZAT = ( a Valószínűsége x Hatással + Valószínűségét )',
    'RISKClassicExp5'=>'KOCKÁZAT = ( a Valószínűsége x Hatással + 2(Valószínűségét) )',
    'Reason'=>'Ok',
    'CloseOutInformation'=>'Közel-Információk',
    'SubmitManagementReview'=>'Küldje Vezetőségi Felülvizsgálat',
    'SubmitRiskMitigation'=>'Küldje Kockázatcsökkentő',
    'RiskDashboard'=>'Kockázat Műszerfal',
    'RiskTrend'=>'Kockázat Trend',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Minden Nyitott Kockázatok Rendelt Nekem Kockázati Szint',
    'AllOpenRisksByRiskLevel'=>'Minden Nyitott Kockázatok által Kockázati Szint',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Minden Nyitott Kockázatok Figyelembe Projektek Kockázati Szint',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Minden Nyitott Kockázatok fogadni, Amíg a Következő Felülvizsgálat által Kockázati Szint',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Minden Nyitott Kockázatok Benyújtani, mint egy Termelési Probléma a Kockázati Szint',
    'AllOpenRisksByScoringMethod'=>'Minden Nyitott Kockázatok által Pontozási Módszer',
    'AllClosedRisksByRiskLevel'=>'Minden Zárt Kockázatok által Kockázati Szint',
    'SubmittedRisksByDate'=>'Benyújtott Kockázatok Által Dátuma',
    'MitigationsByDate'=>'Mitigations Dátum Szerint',
    'ManagementReviewsByDate'=>'Vezetői Értékelés Dátuma',
    'ProjectsAndRisksAssigned'=>'Projektek, valamint a Kockázatok Hozzárendelt',
    'OpenRisks'=>'Nyitva Kockázatok',
    'ClosedRisks'=>'Zárt Kockázatok',
    'ReportMyOpenHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatokat, amelyek az aktuális felhasználó, mint a tulajdonos vagy kezelő kapcsolódó kockázat által rendelt kockázati szint',
    'ReportOpenHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatok által rendelt kockázati szint',
    'ReportProjectsHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatok figyelembe, a projektek által rendelt kockázati szint',
    'ReportNextReviewHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatok fogadni, amíg a következő felülvizsgálat által rendelt kockázati szint',
    'ReportProductionIssuesHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatok benyújtott, mint termelési kérdések által rendelt kockázati szint',
    'ReportRiskScoringHelp'=>'Ez a jelentés megmutatja, az összes kockázat pontozási módszerek, valamint a kockázatok segítségével minden egyes gól',
    'ReportClosedHelp'=>'Ez a jelentés azt mutatja, minden zárva kockázatok által rendelt kockázati szint',
    'ReportSubmittedByDateHelp'=>'Ez a jelentés megmutatja, az összes kockázatot által elrendelt benyújtás dátuma',
    'ReportMitigationsByDateHelp'=>'Ez a jelentés megmutatja, az összes mitigations tervezett által elrendelt mérséklés dátuma',
    'ReportMgmtReviewsByDateHelp'=>'Ez a jelentés azt mutatja, mind a menedzsment véleménye által elrendelt felülvizsgálat dátuma',
    'ReportProjectsAndRisksHelp'=>'Ez a jelentés azt mutatja, projektek, valamint a kockázatok rájuk ruházott',
    'Language'=>'Nyelv',
    'AllOpenRisksNeedingReview'=>'Minden Nyitott Kockázatok Szüksége Felülvizsgálat',
    'ReportReviewNeededHelp'=>'Ez a jelentés megmutatja, az összes megnyitott kockázatok igénylő vezetőségi felülvizsgálat',
    'CustomValue'=>'Egyéni Érték',
    'ClosedRisksByDate'=>'Zárt Kockázatok Által Dátuma',
    'DateClosed'=>'Bezárás Dátuma',
    'ClosedBy'=>'Zárva',
    'ReportClosedByDateHelp'=>'Ez a jelentés megmutatja, az összes kockázatot által elrendelt bezárás dátuma',
    'AllOpenRisksByTeam'=>'Minden Nyitott Kockázatok által Csapat',
    'ReportRiskTeamsHelp'=>'Ez a jelentés azt mutatja, minden csapat, illetve a kockázatok hozzárendelt',
    'Unassigned'=>'Osztott',
    'AllOpenRisksByTechnology'=>'Minden Nyitott Kockázatok Által Technológia',
    'ReportRiskTechnologiesHelp'=>'Ez a jelentés azt mutatja, mind a technológiák, valamint a kockázatok hozzárendelt',
    'RiskLevel'=>'Kockázati Szint',
    'BasedOnTheCurrentRiskScore'=>'Alapján a jelenlegi kockázati pontszám, a következő felülvizsgálat időpontja ',
    'WouldYouLikeToUseADifferentDate'=>'Szeretné, hogy egy másik dátum helyett?',
    'RisksOpenedAndClosedOverTime'=>'Kockázatok Nyitott, illetve Zárt idővel',
    'AllRiskScoresAreAdjusted'=>'Az összes kockázati pontszámok úgy igazítja, hogy megfeleljen egy 0-10 skálán.',
    'DetermineProjectStatus'=>'Meghatározza A Projekt Állapota',
    'ProjectStatusHelp'=>'Hely, a projektek a vödör alapján a jelenlegi állapot.',
    'ActiveProjects'=>'Aktív Projektek',
    'OnHoldProjects'=>'A Hold Projektek',
    'CompletedProjects'=>'Befejezett Projektek',
    'CancelledProjects'=>'Törölt Projektek',
    'UpdateProjectStatuses'=>'Frissítés Projekt Állapotok',
    'HighRiskReport'=>'Magas Kockázati Jelentés',
    'TotalOpenRisks'=>'Teljes Nyitva Kockázatok',
    'TotalHighRisks'=>'Teljes Magas Kockázatok',
    'HighRiskPercentage'=>'Magas Kockázat Aránya',
    'UpdateClassicScore'=>'Frissítés Klasszikus Pontszám',
    'CurrentLikelihood'=>'Jelenlegi Valószínűsége',
    'CurrentImpact'=>'Aktuális Hatás',   
    'UpdateCVSSScore'=>'Frissítés CVSS Pontszám',
    'BaseScoreMetrics'=>'Alappontszám Mutatók',
    'AttackVector'=>'Támadási Vektor,',
    'AttackComplexity'=>'Támadás Komplexitás',
    'Authentication'=>'Hitelesítés',
    'ConfidentialityImpact'=>'Titoktartási Hatása',
    'IntegrityImpact'=>'Integritás Hatása',
    'AvailabilityImpact'=>'Elérhetőség Hatása',
    'TemporalScoreMetrics'=>'Időbeli Pontszám Mutatók',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'Kármentesítés Szint',
    'ReportConfidence'=>'Jelentés Bizalom',
    'EnvironmentalScoreMetrics'=>'A Környezeti Mutatók Pontszám',
    'CollateralDamagePotential'=>'A Járulékos Károkat Is Lehetséges',
    'TargetDistribution'=>'Cél Engedély',
    'ConfidentialityRequirement'=>'Titoktartási Követelmény',
    'IntegrityRequirement'=>'Tisztesség Követelménye',
    'AvailabilityRequirement'=>'Elérhetőség Követelmény',
    'UpdateDREADScore'=>'Frissítés RETTEGÉS Pontszám',
    'DamagePotential'=>'Kár Lehetséges',
    'Reproducibility'=>'Reprodukálhatóság',
    'AffectedUsers'=>'Az Érintett Felhasználók',
    'Discoverability'=>'Discoverability',
    'UpdateOWASPScore'=>'Frissítés OWASP Pontszám',
    'ThreatAgentFactors'=>'Fenyegetés Ügynök Tényezők',
    'SkillLevel'=>'Képzettségi Szint',
    'Motive'=>'Indíték',
    'Opportunity'=>'Lehetőség',
    'Size'=>'Méret',
    'VulnerabilityFactors'=>'A Biztonsági Rés Tényezők',
    'EaseOfDiscovery'=>'Könnyű Felfedezése',
    'EaseOfExploit'=>'Könnyű Kihasználni',
    'Awareness'=>'Tudatosság',
    'IntrusionDetection'=>'Behatolásjelző',
    'TechnicalImpact'=>'Műszaki Hatás',
    'LossOfConfidentiality'=>'Veszteség Titoktartási',
    'LossOfIntegrity'=>'Elvesztése Integritásának',
    'LossOfAvailability'=>'Veszteség, a Rendelkezésre állás',
    'LossOfAccountability'=>'Veszteség az Elszámoltathatóság',
    'BusinessImpact'=>'Üzleti Hatás',
    'FinancialDamage'=>'Pénzügyi Károk',
    'ReputationDamage'=>'Hírnevét Kárt',
    'NonCompliance'=>'A Meg Nem Felelés',
    'PrivacyViolation'=>'Adatvédelmi Szabálysértés',
    'UpdateCustomScore'=>'Frissítés Egyéni Pontszám',
    'ManuallyEnteredValue'=>'Kézzel Beírt Érték',
    'ScoreByClassic'=>'Pontszám Klasszikus',
    'ScoreByCVSS'=>'Pontszám CVSS',
    'ScoreByDREAD'=>'Pontszám által RETTEGETT',
    'ScoreByOWASP'=>'Pontszám OWASP',
    'ScoreByCustom'=>'Pontszám Egyéni',
    'BaseVector'=>'Alapvektor',
    'TemporalVector'=>'Időbeli Vektor',
    'EnvironmentalVector'=>'Környezeti Vektor',
    'SupportingDocumentation'=>'Igazoló Dokumentumokat',
    'Import'=>'Import',
    'Export'=>'Export',
    'ActivateTheImportExportExtra'=>'Aktiválja az Import/Export Extra',
    'PrintableView'=>'Nyomtatható Nézet',
    'GroupBy'=>'Csoport',
    'IncludedColumns'=>'Szereplő Oszlopok',
    'AllRisks'=>'Az Összes Kockázatot',
    'DynamicRiskReport'=>'Dinamikus Kockázati Jelentés',
    'ObsoleteReports'=>'Elavult-Jelentések',
    'Project'=>'Projekt',
    'SortBy'=>'Rendezés',
    'MonthSubmitted'=>'Hónapban Benyújtott',
    'AssetManagement'=>'Vagyonkezelés',
    'AutomatedDiscovery'=>'Automatikus Felfedezés',
    'BatchImport'=>'Köteg-Import',
    'ManageAssets'=>'Eszközök Kezelése',
    'AssetValuation'=>'Eszközértéken',
    'AllowAccessToAssetManagementMenu'=>'Elérhetjük, hogy a "vagyonkezelő" Menü',
    'AutomatedDiscoveryHelp'=>'Fedezze fel az összes élő IP-címeket a beírt IP-tartomány. Élő IP-címek lesz hozzá, hogy az eszköz listán. Elfogadható formátumok:',
    'IPRange'=>'IP-Tartomány',
    'Search'=>'Keresés',
    'AddANewAsset'=>'Adjunk hozzá egy Új Eszköz',
    'DeleteAnExistingAsset'=>'Törölhet egy Meglévő Eszköz',
    'AssetName'=>'Eszköz Neve',
    'IPAddress'=>'IP-Cím',
    'AssetWasAddedSuccessfully'=>'Eszköz volt, ki sikeresen.',
    'AssetWasDeletedSuccessfully'=>'Eszköz volt, sikeresen törölve.',
    'ThereWasAProblemAddingTheAsset'=>'Van egy probléma, hozzátéve, hogy az eszköz.',
    'ThereWasAProblemDeletingTheAsset'=>'Volt egy kis probléma törlése az eszköz.',
    'ComingSoon'=>'Hamarosan',
    'ExportRisks'=>'Export Kockázatok',
    'ExportMitigations'=>'Export Mitigations',
    'ExportReviews'=>'Export-Vélemények',
    'ExportCombined'=>'Kivitel Kombinált',
    'MitigatedBy'=>'Enyhítette',
    'MitigationId'=>'Adott esetben kockázatcsökkentő ID',
    'ReviewId'=>'Felülvizsgálat ID',
    'AffectedAssets'=>'Érintett Eszközök',
    'Activate'=>'Aktiválja',
    'DeleteRisks'=>'Törlés Kockázatok',
    'DeletedRisksCannotBeRecovered'=>'Törölt Kockázatok Nem Visszatérítendő',
    'RisksDeletedSuccessfully'=>'Kockázat(ok) Sikeresen Törölve',
    'ThereWasAProblemDeletingTheRisk'=>'Volt egy kis Probléma Törlése a Kockázat(ok)',
    'Activated'=>'AKTÍV',
    'IWantToReviewInsignificantRiskEvery'=>'Azt akarom, hogy vizsgálja felül JELENTÉKTELEN a kockázat minden',
    'Insignificant'=>'Jelentéktelen',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Úgy vélem, NAGYON NAGY a kockázata, hogy valami nagyobb, mint',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Úgy vélem, NAGY a kockázata, hogy lehet kevesebb, mint a fenti, de nagyobb, mint',
    'VeryHigh'=>'Nagyon Magas',
    'VeryHighRisk'=>'Nagyon Magas Kockázat',
    'IWantToReviewVeryHighRiskEvery'=> 'Azt akarom, hogy vizsgálja felül egy NAGYON MAGAS kockázat minden',
    'AbleToReviewVeryHighRisks'=>'Tudja, hogy vizsgálja felül egy Nagyon Magas Kockázat',
    'AbleToReviewInsignificantRisks'=>'Képes Felülvizsgálat Jelentéktelen Kockázatok',
    'TotalVeryHighRisks'=>'Összesen Nagyon Magas Kockázat',
    'VeryHighRiskPercentage'=>'Nagyon Magas Kockázat Aránya',
    'AllTeams'=>'Minden Csapat',
    'FileUploadSettings'=>'A Fájl Feltöltési Beállítások',
    'AllowedFileTypes'=>'Megengedett Fájl Típusok',
    'AddNewFileTypeOf'=>'Új fájl típusa',
    'DeleteCurrentFileTypeOf'=>'Törölje az aktuális fájl típusa',
    'MaximumUploadFileSize'=>'Maximális Feltöltési Méret',
    'Bytes'=>'Bájt',
    'CheckAll'=>'Ellenőrizze Az Összes',
    'CheckAllRiskMgmt'=>'Ellenőrizze Az Összes Kockázatkezelési',
    'CheckAllAssetMgmt'=>'Ellenőrizze A Vagyonkezelő',
    'CheckAllConfigure'=>'Ellenőrizze Az Összes Konfigurálása',
    'MitigationTeam'=>'Adott Esetben Kockázatcsökkentő Csapat',
    'ImportRisks'=>'Import Kockázatok',
    'ImportAssets'=>'Import Eszközök',
    'AssetValue'=>'Eszközérték',
    'Register'=>'Regisztráljon',
    'RegisterSimpleRisk'=>'Regisztráljon SimpleRisk',
    'RegistrationText'=>'A regisztrációval SimpleRisk lesz, amely a kapcsolattartási adatokat, így a legfrissebb kiadás információk fontos biztonsági értesítések. Az ön adatait soha nem lehet adni, hogy egy harmadik fél. Regisztrált esetekben is képes biztonsági mentést készíteni, illetve bővíthető a kattintson a gombra.',
    'RegistrationInformation'=>'Regisztrációs Információk',
    'Company'=>'Cég',
    'JobTitle'=>'Beosztás',
    'Phone'=>'Telefon',
    'UpgradeSimpleRisk'=>'Frissítés SimpleRisk',
    'UpgradeInstructions'=>'Ez a szakasz használja a Frissítési Extra. Győződj meg róla, hogy a legújabb verziót válassza a "Frissítés", regisztrálja újra, meg újra ezt az oldalt.',
    'NoUpgradeNeeded'=>'Nem upgrade szükséges.',
    'BackupDatabase'=>'Készítsen biztonsági másolatot az adatbázisról',
    'UpgradeApplication'=>'Frissítés a Kérelem',
    'UpgradeDatabase'=>'Az Adatbázis frissítése',
    'CustomExtras'=>'Egyéni Extrák',
    'CustomExtrasText'=>'Jó lenne, ha mindent szabad, ugye? Remélhetőleg a mag SimpleRisk platform képes szolgálni a kockázatkezelési szüksége van. De, ha úgy találja, hogy még mindig többet akar funkció, kifejlesztettünk egy sor "Extrák".',
    'Upgrade'=>'Frissítés',
    'Install'=>'Telepítése',
    'Purchase'=>'Vásárlás',
    'PasswordPolicy'=>'Jelszó Politika',
    'MinimumNumberOfCharacters'=>'Minimum Karakterek Száma',
    'RequireAlphaCharacter'=>'Szükség Alfa Karakter',
    'RequireUpperCaseCharacter'=>'Szükség Nagybetűs Karakter',
    'RequireLowerCaseCharacter'=>'Szükség Kisbetűt',
    'RequireNumericCharacter'=>'Szükség Numerikus Karakter',
    'RequireSpecialCharacter'=>'Speciális Karakter',
    'Enabled'=>'Engedélyezett',
    'RiskPyramid'=>'Kockázat Piramis',
    'RiskPyramidDescription'=>'A kockázat piramis felett segít megmutatni, hogy az eloszlás kockázatok között a különböző kockázati szinteket. Egy felső nehéz piramis lehet a jele, hogy a szervezet túl sok kockázatot.',
    'RiskAdvice'=>'Kockázati Tanácsadás',
    'AddDeleteAssets'=>'Add & Törlés Eszközök',
    'EditAssets'=>'Szerkesztési Eszközök',
    'AutomaticAssetValuation'=>'Automatikus Eszközértéken',
    'ManualAssetValuation'=>'Kézi Eszköz Értékelési',
    'MinimumValue'=>'Minimális Érték',
    'MaximumValue'=>'Maximális Érték',
    'ValueRange'=>'Érték Tartomány',
    'DefaultAssetValuation'=>'Alapértelmezett Eszközértéken',
    'Default'=>'Alapértelmezett',
    'RisksAndAssets'=>'Kockázatok, valamint Eszközök',
    'Report'=>'Jelentés',
    'RisksByAsset'=>'A kockázatok által Eszköz',
    'AssetsByRisk'=>'Eszközök által Kockázat',
    'MaximumQuantitativeLoss'=>'Maximális Mennyiségi Veszteség',
    'MitigationOwner'=>'Adott Esetben Kockázatcsökkentő Tulajdonos',
    'MitigationCost'=>'- Mérséklési Költség',
    'RiskColumns'=>'Kockázat Oszlopok',
    'MitigationColumns'=>'Adott Esetben Kockázatcsökkentő Oszlopok',
    'ReviewColumns'=>'Felülvizsgálat Oszlopok',
    'ChangeStatus'=>'Állapot Módosítása',
    'SetRiskStatusTo'=>'Meghatározott Kockázati Állapota',
    'AddNewStatusNamed'=>'Új nevű állapota',
    'DeleteStatusNamed'=>'Törlés nevű állapota',
    'DefaultCurrencySymbol'=>'Az Alapértelmezett Pénznem Szimbólum',
    'DefaultValues'=>'Az Alapértelmezett Értékek',
    'RiskSource'=>'Kockázati Forrás',
    'AddNewSourceNamed'=>'Új forrás, bizonyos',
    'DeleteSourceNamed'=>'Törlés forrás neve',
    'CheckAllAssessments'=>'Ellenőrizze Az Összes Értékelések',
    'AllowAccessToAssessmentsMenu'=>'Hozzáférés engedélyezése "Értékelések" Menü',
    'Assessments'=>'Értékelések',
    'AvailableAssessments'=>'Elérhető Értékelések',
    'PendingRisks'=>'Folyamatban Lévő Kockázatok',
    'CreateAssessment'=>'Hozzon Létre Értékelés',
    'EditAssessment'=>'Szerkesztés Értékelés',
    'Overview'=>'Áttekintés',
    'OpenVsClosed'=>'Nyitva vs Zárva',
    'MitigatedVsUnmitigated'=>'Enyhíteni vs Hamisíthatatlan',
    'ReviewedVsUnreviewed'=>'Felül vs Unreviewed',
    'OpenedRisks'=>'Nyitott Kockázatok',
    'MailSettings'=>'E-Mail Beállítások',
    'TransportAgent'=>'Szállítási Ügynök',
    'FromName'=>'A Név',
    'FromEmail'=>'A E-Mail',
    'ReplyToName'=>'ReplyTo Név',
    'ReplyToEmail'=>'ReplyTo E-Mail',
    'Host'=>'Fogadó',
    'SMTPAuthentication'=>'SMTP Hitelesítés',
    'Encryption'=>'Titkosítási',
    'Port'=>'Port',
    'Next'=>'Következő',
    'NewAssessmentQuestion'=>'Új Értékelési Kérdés',
    'Question'=>'Kérdés',
    'RiskScore'=>'Kockázati Pontszám',
    'SubmitRisk'=>'Küldje Kockázat',
    'Answer'=>'Válasz',
    'AddQuestion'=>'Add Kérdés',
    'SaveAssessment'=>'Értékelés Mentése',
    'SendAssessment'=>'Küldj Értékelés',
    'DeleteAssessment'=>'Törlés Értékelés',
    'AssessmentName'=>'Értékelő Neve',
    'SendTo'=>'Küldés',
    'ActiveAssessments'=>'Aktív Értékelések',
    'SentTo'=>'Küldeni',
    'From'=>'A',
    'Key'=>'Kulcs',
    ''=>'',
);

?>
package patterns.chain;

/**
 * Created by Oleh on 10.11.2017.
 */
public class BugReport {
    public static void main(String[] args) {
        Notifier reportNotifier = new SimpleReportNotifier(Priority.ROUTINE);
        Notifier emailNotifier = new EmailReportNotifier(Priority.IMPORTANT);
        Notifier smsNotifier = new SMSReportNotifier(Priority.ASAP);

        reportNotifier.setNextNotifier(emailNotifier);
        emailNotifier.setNextNotifier(smsNotifier);

        reportNotifier.notifyManager("Все в порядку ", Priority.ROUTINE);

        reportNotifier.notifyManager("Щось не так ", Priority.IMPORTANT);
    }
}
